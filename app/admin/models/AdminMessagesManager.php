<?
//сообщения
class AdminMessagesManager
{

    private $db;

    function __construct(){
        $db = ConnectionDB::getInstance(); 
        $this->db = $db->db;
    }
    
    //Вывод последних 3х новых сообщений
    function selectLast3Unread(){

       return $this->db->kedlek_messages()->where('mark_read = 1')->order('id desc')->limit(3,0);
       //return $this->db->kedlek_messages()->order('id desc');
        
    }

    //Вывод всех сообщений
    function selectAll(){

       return $this->db->kedlek_messages()->order('id desc');
        
    }

    //Вывод всех новых сообщений
    function selectNew(){

        return $this->db->kedlek_messages()->where('mark_read = 1')->order('id desc');
        
    }

    //удаление сообщения
    function deleteMessage($id){

        $item = $this->db->kedlek_messages[$id];


        if ($item && $item->delete()) {

            return true;

        }else{

            return false;
        
        }

    }

    //Пометить сообщение как прочитанное
    function markIsRead($id){

        $item = $this->db->kedlek_messages[$id];

        $data = array(
            "mark_read" => '2'
        );

        $result = $item->update($data);

        return true;

    }
  
}