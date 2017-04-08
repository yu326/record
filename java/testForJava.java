package com.inter3i.opentdata.dtstorage.service;

/**
 * Created by koreyoshi on 2017/4/8.
 */

/*
 *  java问题
 *
 *  变量
 *  全局变量定义类里面，作用域在此类内
 *  局部变量定义在方法里面，作用域也仅限于此方法内
 *
 *  常量
 *  常量用final关键词来定义。
 *  常量，不可重新赋值
 *
 *  逻辑运算符
 *  && 与 & 区别
 *
 *  break跳出循环
 *  一重循环可以直接跳出，两层则不能用break 2;来跳出。
 *  需要给外层循环以标签名.直接break 标签名就可以跳出外层循环.
 *  continue 同上
 *
 * */
public class testForJava {
    static String s1 = "yu";
    //测试
    public static void main(String[] args) {
        //变量，常量问题
//         final  String s2 = "suixin";
//        String s1 = "the beautiful of yu";
//        System.out.println("the s1 is:" + s1);
//        System.out.println("the s2 is:" + s2);
        //跳出指定循环
//    Loop:for ( int i1 = 0; i1 < 10; i1++ )
//        {
//            System.out.println("the i1 is:"+i1);
//            Loop1:for ( int i2 = 0; i2 < 10; i2++ )
//            {
//                if(i2>1){
//                    break Loop;
//                }
//                System.out.println("the i2 is:"+i2);
//            }
//        }
        //java 用for循环打出菱形
//        int hight = 7;   //定义总层数
        //test new
        //一层循环决定层级
        //二层循环决定，每层的开始的空格数，所以循环要从1开始。
        //三层循环决定菱形的个数

        //上半层
//        for(int i=1;i<=hight;i+=2){
//            for(int kong=hight;kong>i-1;kong--){
//                System.out.print(" ");
//            }
//            for(int xing=1;xing<=i;xing++){
//                System.out.print("* ");
//            }
//            System.out.println();
//        }
        //下半层
//        for(int i=hight;i>1;i-=2){
//            for(int kong=i-2;kong<=hight;kong++){
//                System.out.print(" ");
//            }
//            for(int xing=3;xing<=i;xing++){
//                System.out.print("* ");
//            }
//            System.out.println();
//        }

        //判断变量是奇数还是偶数
//        Integer x = 5;
//        if(x == 0){
//            System.out.println("0是特殊的~~");
//        }else{
//            if(x%2 == 0){
//                System.out.println("偶数");
//            }else{
//                System.out.println("奇数");
//            }
//        }


    }

}
