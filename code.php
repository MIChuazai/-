<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>mulTSideBar DEMO</title>
</head>
<body style="height:1200px">
    <div id="test"></div>
    <script type="text/javascript" src="http://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="multSideBar.js"></script>
    <script type="text/javascript">

        /*
         *author:leslieSie 
         *description:关于MultSideBar插件的简单应用
         *time:2016/12/11
         */
        $("#test").multSideBar({
            goTopControl:true,
            show:{
                data:[
                {
                    icon:"weibo",   //weixin,qq,facebook,taobao，zhifubao,weibo
                    type:"hollow",   //可选参数有hollow,solid
                    noCustom:true,    //自定义类型，只有在custom为true的时候，customUrl才有效
                    text:"微博",
                    customUrl:"",    //图片的URL
                    click:function(){  
                        window.location.href="https://www.weibo.com";
                    },         
                },{
                    icon:"weibo",   //weixin,qq,facebook,taobao，zhifubao,weibo
                    type:"hollow",   //可选参数有hollow,solid
                    noCustom:false,    //自定义类型，只有在custom为true的时候，customUrl才有效
                    text:"小兔子",
                    customUrl:"img/custom.svg",    //图片的URL
                    click:function(){
                        window.location.href="https://www.baidu.com";
                    },        //点击后的效果        
                },{
                    icon:"goTop",   //weixin,qq,facebook,taobao，zhifubao,weibo
                    type:"solid",   //可选参数有hollow,solid
                    noCustom:true,    //自定义类型，只有在custom为true的时候，customUrl才有效
                    text:"置顶",
                    customUrl:"",    //图片的URL1
                }]
            }
        });
    </script>
</body>
</html>
