<?php 
class Ga_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function insert_ga($data2)
        {

                $limitRow=$data2['convert']['countRow'];
                $limitDim=$data2['convert']['countDim'];
                $limitMet=$data2['convert']['countMet'];
                $limitMetVal=$data2['convert']['countMetVal'];

                for ( $rowIndex = 0; $rowIndex < $limitRow; $rowIndex++) {
                        for ($i = 0; $i < $limitDim && $i < $limitDim; $i++) {
                                $data[$rowIndex]['date'] = $data2['convert']['convert']['dimensions'][$rowIndex][$i];
                            }
                        for ($j = 0; $j < $limitMet; $j++) {
                              for ($k = 0; $k < $limitMetVal; $k++) {
                                $data[$rowIndex]['page_view'] = $data2['convert']['convert']['metrics'][$rowIndex][$j][$k];
                              }
                            }
                }
        }

        public function getValue($convert, $dimIndex, $metIndex, $limitRow, $limitDim, $limitMet, $limitMetVal){

                for ( $rowIndex = 0; $rowIndex < $limitRow; $rowIndex++) {
                        for ($i = 0; $i < $dimIndex ; $i++) {
                            $data['dimension'][]  = $convert['dimensions'][$rowIndex][$i];
                            
                        }
                        for ($j = 0; $j < $limitMet; $j++) {
                              for ($k = 0; $k < $metIndex; $k++) {
                                $data['metric'][] = $convert['metrics'][$rowIndex][$j][$k];
                              }
                        }
                }
                return $data;
        }

        public function toDate($data){
            $max = count($data['dimension']);
            for ($i=0; $i < $max ; $i++) { 
                $google_date = $data['dimension'][$i];
                $date = DateTime::createFromFormat('Ymd', $google_date);
                $data['dimension'][$i] = $date->format('D, j');
            }
            return $data;

        }

        public function limitData($limit, $tempData){
            count($tempData);
            for ($i=0; $i < $limit; $i++) { 
                $data['dimension'][] = $tempData['dimension'][$i];
                $data['metric'][] = $tempData['metric'][$i];
            }
            return $data;
        }

        public function addLink($tempData){
            // $link = echo anchor('', 'Click here');"https://testcobacoba.000webhostapp.com/".$page;
            $limit = count($tempData['dimension']);
            
            for ($i=0; $i < $limit; $i++) { 
                $link = "<a href=http://testcobacoba.000webhostapp.com>".$tempData['dimension'][$i]."</a>";
                $data['dimension'][$i] = $link;;
                $data['metric'][$i] = $tempData['metric'][$i];
            }
            echo '<pre>';
            print_r($data);
            echo '</pre>';
            return $data;
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; 
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

        public function getView(){
            $this->db->select('page_view');
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('date_pageview', 7);

            $wow = array_reverse($query->result_array());
            
            for ($i=0; $i <count($wow) ; $i++) { 
                $duar[] = $wow[$i]['page_view'];
            }
            return $duar;
        }

        public function updateGAtable(){
            $this->db->select('id');
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get('date_paeview', 3);

            $wow = array_reverse($query->result_array());

            for ($i=0; $i <count($wow) ; $i++) { 
                $wow[$i]['date'] = "";
                $wow[$i]['page_view'] = "";
            }

            echo '<pre>';
            print_r($wow);
            var_dump($wow);
            echo '</pre>';
        }

        public function top8pagedetail($convert, $dimIndex, $metIndex, $limitRow, $limitDim, $limitMet, $limitMetVal, $top8){

                for ( $rowIndex = 0; $rowIndex < $limitRow; $rowIndex++) {
                        for ($i = 0; $i < $dimIndex ; $i++) {
                            $data['dimension'][][]  = $convert['dimensions'][$rowIndex][$i];
                        }
                        for ($j = 0; $j < $limitMet; $j++) {
                              for ($k = 0; $k < $metIndex; $k++) {
                                if ($data['dimension'][$rowIndex][$k]==$top8) {
                                    $data['metric'][] = $convert['metrics'][$rowIndex][$j][$k];
                                }else{
                                    $data['metric'][] = 0;
                                }
                              }
                        }
                }
                return $data;
        }

        public function getComment($where=NULL, $value=NULL, $order=NULL){
            $this->db->order_by($order, 'DESC');
            if($where!=NULL){
                $this->db->where($where, $value);
            }
            $query = $this->db->get('comment');
            $wow = $query->result_array();
            return $query->result_array();
        }

        public function insertComment($data){
            $this->db->insert('comment', $data);
        }

        public function deleteComment($id){
            $this->db->where('id', $id);
            $query = $this->db->delete('comment');
        }

        public function approveComment($id){
            $this->db->set('status', 1);
            $this->db->where('id', $id);
            $this->db->update('comment');
        }

        public function unapproveComment($id){
            $this->db->set('status', 0);
            $this->db->where('id', $id);
            $this->db->update('comment');
        }
}
 ?>