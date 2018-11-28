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
         *description:����MultSideBar����ļ�Ӧ��
         *time:2016/12/11
         */
        $("#test").multSideBar({
            goTopControl:true,
            show:{
                data:[
                {
                    icon:"weibo",   //weixin,qq,facebook,taobao��zhifubao,weibo
                    type:"hollow",   //��ѡ������hollow,solid
                    noCustom:true,    //�Զ������ͣ�ֻ����customΪtrue��ʱ��customUrl����Ч
                    text:"΢��",
                    customUrl:"",    //ͼƬ��URL
                    click:function(){  
                        window.location.href="https://www.weibo.com";
                    },         
                },{
                    icon:"weibo",   //weixin,qq,facebook,taobao��zhifubao,weibo
                    type:"hollow",   //��ѡ������hollow,solid
                    noCustom:false,    //�Զ������ͣ�ֻ����customΪtrue��ʱ��customUrl����Ч
                    text:"С����",
                    customUrl:"img/custom.svg",    //ͼƬ��URL
                    click:function(){
                        window.location.href="https://www.baidu.com";
                    },        //������Ч��        
                },{
                    icon:"goTop",   //weixin,qq,facebook,taobao��zhifubao,weibo
                    type:"solid",   //��ѡ������hollow,solid
                    noCustom:true,    //�Զ������ͣ�ֻ����customΪtrue��ʱ��customUrl����Ч
                    text:"�ö�",
                    customUrl:"",    //ͼƬ��URL
                }]
            }
        });
    </script>
</body>
</html>