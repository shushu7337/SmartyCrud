# 流程


* 透過 controller -> 呼叫 model 內的 function  
    * 作為統整資料邏輯
    * 如下:<br>
    $XXX=CrudAdmin::add($_POST['qwe']);($XXX接 function add($DD)的return值)
    $CCC=CrudAdmin::select();

* 透過model -> 連接資料庫 
  * 資料存取
  * 如下:<br>
    class CrudAdmin{
     function add($DD){
       $DD~
       return $xxx; (回傳$xxx至controller呼叫處)
      }
      function select(){
      ...
      return $ccc;
      }
      function update(){
      ...
      return $qqq;
      }
    }