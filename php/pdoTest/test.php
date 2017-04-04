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
//      绑定参数    如果sql'语句中用的是？号作为占位符，那么在bindParam参数中，第一个参数就以占位符的顺序填写，比如1代表第一个？号的值
//        $obj	= $db->prepare("select * from about where id = ?");
//        $id	 = 3;
//        $obj->bindParam(1,$id,PDO::PARAM_INT);
//        $obj->execute();
//        $result = $obj->fetchALL(PDO::FETCH_ASSOC);
//        var_dump($result);
//      绑定参数   如果sql语句中用的是 " :变量名  "作为占位符，那么bingParam参数中，第一个参数就是“ :变量名 ”
//      bindParam函数：par1，占位符标识，par2：值（必须以变量形式体现，否则报：Cannot pass parameter 2），par3：值的模式
        $obj	= $db->prepare("select * from about where id = :id");
        $id	 = 3;
        $obj->bindParam(':id',$id,PDO::PARAM_INT);
        $obj->execute();
        $result = $obj->fetchALL(PDO::FETCH_ASSOC);
        var_dump($result);
}catch (PDOException  $e){
    print "Error is:".$e->getMessage()."<br/>";
}



?>