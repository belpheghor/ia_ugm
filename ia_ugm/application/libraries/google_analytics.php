<?php

class Google_analytics{
    
    function initializeAnalytics()
    {
      // Creates and returns the Analytics Reporting service object.

      // Use the developers console and download your service account
      // credentials in JSON format. Place them in this directory or
      // change the key file location if necessary.
      $KEY_FILE_LOCATION = BASEPATH . '../application/third_party/google/ga-test123-9e58fe3099f7.json';

      // Create and configure a new client object.
      $client = new Google_Client();
      $client->setAuthConfig($KEY_FILE_LOCATION);
      $client->setScopes(['https://www.googleapis.com/auth/analytics.readonly']);
      $analytics = new Google_Service_AnalyticsReporting($client);
      return $analytics;
    }

function getDateRange($startDate, $endDate){
    // Create the DateRange object.
    // expression: '[0-9]{4}-[0-9]{2}-[0-9]{2}|today|yesterday|[0-9]+(daysAgo)'
    $dateRange = new Google_Service_AnalyticsReporting_DateRange();
    $dateRange->setStartDate($startDate);
    $dateRange->setEndDate($endDate);

    return $dateRange;
}

function getMetrics($max, $metricList){
    // Create the Metrics object.
    for ($i=0; $i < $max ; $i++) { 
      $metrics[$i] = new Google_Service_AnalyticsReporting_Metric();
      $metrics[$i]->setExpression($metricList[$i]);
    }
    return $metrics;
}

function getDimensions($max, $dimensionList){
    for ($i=0; $i < $max ; $i++) { 
      $dimensions[$i] = new Google_Service_AnalyticsReporting_Dimension();
      $dimensions[$i]->setName($dimensionList[$i]);
    }
    return $dimensions;
}

function ordering($fieldName, $orderType = "VALUE", $sortOrder = "ASCENDING"){
    //create ordering 
    $ordering = new Google_Service_AnalyticsReporting_OrderBy();
    $ordering->setFieldName($fieldName);
    $ordering->setOrderType($orderType);   
    $ordering->setSortOrder($sortOrder);    

    return $ordering;
}

function dimensionfilter($dimension, $expression){
  // Create the DimensionFilter.
  $dimensionFilter = new Google_Service_AnalyticsReporting_DimensionFilter();
  $dimensionFilter->setDimensionName($dimension);
  $dimensionFilter->setOperator('EXACT');
  $dimensionFilter->setExpressions(array($expression));

  // Create the DimensionFilterClauses
  $dimensionFilterClause = new Google_Service_AnalyticsReporting_DimensionFilterClause();
  $dimFilter = $dimensionFilterClause->setFilters(array($dimensionFilter));

  return $dimFilter;
}

function getReport($analytics, $dateRange, $metrics, $dimensions, $ordering, $IncludeEmpryRow= FALSE) {

    $VIEW_ID = "ga:178573267";

    // Create the ReportRequest object.
    $request = new Google_Service_AnalyticsReporting_ReportRequest();
    $request->setViewId($VIEW_ID);
    $request->setDateRanges($dateRange);
    $request->setDimensions($dimensions);
    $request->setMetrics($metrics);
    $request->setIncludeEmptyRows($IncludeEmpryRow);
    $request->setOrderBys($ordering);

    $body = new Google_Service_AnalyticsReporting_GetReportsRequest();
    $body->setReportRequests( array( $request) );
    $data =  $analytics->reports->batchGet( $body );
    return $data;
  }

function getReportFilter($analytics, $dateRange, $metrics, $dimensions, $ordering, $IncludeEmpryRow= FALSE, $dimFilter, $expression) {

    $VIEW_ID = "ga:178573267";

    // Create the DimensionFilter.
    $dimensionFilter = new Google_Service_AnalyticsReporting_DimensionFilter();
    $dimensionFilter->setDimensionName($dimFilter);
    $dimensionFilter->setOperator('EXACT');
    $dimensionFilter->setExpressions(array($expression));

    // Create the DimensionFilterClauses
    $dimensionFilterClause = new Google_Service_AnalyticsReporting_DimensionFilterClause();
    $dimensionFilterClause->setFilters(array($dimensionFilter));


    // Create the ReportRequest object.
    $request = new Google_Service_AnalyticsReporting_ReportRequest();
    $request->setViewId($VIEW_ID);
    $request->setDateRanges($dateRange);
    $request->setDimensions($dimensions);
    $request->setMetrics($metrics);
    $request->setIncludeEmptyRows($IncludeEmpryRow);
    $request->setOrderBys($ordering);
    // $request->setDimensionFilterClauses(array($dimFilter));
    $request->setDimensionFilterClauses(array($dimensionFilterClause));

    $body = new Google_Service_AnalyticsReporting_GetReportsRequest();
    $body->setReportRequests( array( $request) );
    $data =  $analytics->reports->batchGet( $body );
    return $data;
  }

  function convertReport($reports) {
          $convert;
          $countRow;
          $countDim;
          $countMet;
          $countMetVal;
          for ( $reportIndex = 0; $reportIndex < count( $reports ); $reportIndex++ ) {
          $report = $reports[ $reportIndex ];
          $header = $report->getColumnHeader();
          $dimensionHeaders = $header->getDimensions();
          $metricHeaders = $header->getMetricHeader()->getMetricHeaderEntries();
          $rows = $report->getData()->getRows();
          $countRow = count($rows);


          for ( $rowIndex = 0; $rowIndex < count($rows); $rowIndex++) {
            $row = $rows[ $rowIndex ];
            $dimensions = $row->getDimensions();
            $metrics = $row->getMetrics();
            $countDim = count($dimensions);
            $countMet = count($metrics);
            
            for ($i = 0; $i < count($dimensionHeaders) && $i < count($dimensions); $i++) {
              $convert['dimensions'][$rowIndex][$i] = $dimensions[$i];
            }
            for ($j = 0; $j < count($metrics); $j++) {
              $values = $metrics[$j]->getValues();
              $countMetVal = count($values);
              for ($k = 0; $k < count($values); $k++) {
                $convert['metrics'][$rowIndex][$j][$k] = $values[$k];
              }
            }
          }  
        }
        $convertReport['countRow'] = $countRow;
        
        if ($countRow == 0) {
          $convertReport['countDim'] = 0;
          $convertReport['countMet'] = 0;
          $convertReport['countMetVal'] = 0;  
        }else{
          $convertReport['countDim'] = $countDim;
          $convertReport['countMet'] = $countMet;
          $convertReport['countMetVal'] = $countMetVal;
          $convertReport['convert'] = $convert;
        }

        return $convertReport;
  }

function metricArray($reports) {
          $convert;
          $countRow;
          $countDim;
          $countMet;
          $countMetVal;
          $datametric;
          for ( $reportIndex = 0; $reportIndex < count( $reports ); $reportIndex++ ) {
          $report = $reports[ $reportIndex ];
          $header = $report->getColumnHeader();
          $dimensionHeaders = $header->getDimensions();
          $metricHeaders = $header->getMetricHeader()->getMetricHeaderEntries();
          $rows = $report->getData()->getRows();
          $countRow = count($rows);


          for ( $rowIndex = 0; $rowIndex < count($rows); $rowIndex++) {
            $row = $rows[ $rowIndex ];
            $dimensions = $row->getDimensions();
            $metrics = $row->getMetrics();
            $countDim = count($dimensions);
            $countMet = count($metrics);
            
            for ($i = 0; $i < count($dimensionHeaders) && $i < count($dimensions); $i++) {
              $convert['dimensions'][$rowIndex][$i] = $dimensions[$i];
            }
            for ($j = 0; $j < count($metrics); $j++) {
              $values = $metrics[$j]->getValues();
              $countMetVal = count($values);
              for ($k = 0; $k < count($values); $k++) {
                $convert['metrics'][$rowIndex][$j][$k] = $values[$k];
              }
            }
          }  
        }
        $convertReport['countRow'] = $countRow;
        
        if ($countRow == 0) {
          $convertReport['countDim'] = 0;
          $convertReport['countMet'] = 0;
          $convertReport['countMetVal'] = 0;  
        }else{
          $convertReport['countDim'] = $countDim;
          $convertReport['countMet'] = $countMet;
          $convertReport['countMetVal'] = $countMetVal;
          $convertReport['convert'] = $convert;
        }

        return $convertReport;
  }

}
