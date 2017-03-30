<?php
/*
 *  pdo 练习  2017/3/27
 *
 *  PDO::exec()主要是针对没有结果集合返回的操作，比如INSERT、UPDATE、DELETE等操作，它返回的结果是当前操作影响的列数。
 *  PDO::query()主要是用于有记录结果返回的操作，特别是SELECT操作
 *  PDO::prepare()主要是预处理操作，需要通过$rs->execute()来执行预处理里面的SQL语句，这个方法可以绑定参数，功能比较强大
 *
 * */



try{
    $dsn = "mysql:host=localhost;dbname=yu";
    $db = new PDO($dsn, 'root', 'root');

//   查询操作  select
//        $rs = $db->query("SELECT * FROM about");
//        $data = $rs->fetchAll();
//        print_r($data);die;
//   插入操作   insert
//      $sql = "insert into about set picture='/picture/test.jpg',desc1='the perfect day',status='1'";
//      $res = $db->exec($sql);
//      print_r($res);die;
//    修改操作  udpate
//        $sql = "update about set picture='/picture/test1.jpg' where id=4";
//        $res = $db->exec($sql);
//        print_r($res);die;
//     删除操作  delete
//        $sql = "delete from about where id=4";
//        $res = $db->exec($sql);
//        print_r($res);die;

}catch (PDOException  $e){
    print "Error is:".$e->getMessage()."<br/>";
}



?>