<!DOCTYPE html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
 
    <script src="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.js"></script>
    <link href="https://cdn.dhtmlx.com/gantt/edge/dhtmlxgantt.css" rel="stylesheet">
 
    <style type="text/css">
        html, body{
            height:100%;
            padding:0px;
            margin:0px;
            overflow: hidden;
        }
        .gantt_task_progress{
            background: #ee2b7b;
        }
        .gantt_task_line{
            background-color: #ee2b7cb7;
            border: 1px solid #ee2b7b;
        }
        .gantt_task_content{
            color: #fffff;
        }
    </style>

    <!--Default -->
    {{-- <link href="{{ url('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
<div id="gantt_here" style='width:100%; height:100%;'></div>
<script type="text/javascript">
    gantt.config.date_format = "%Y-%m-%d %H:%i:%s";

    gantt.config.order_branch = true;
    gantt.config.order_branch_free = true;
 
    gantt.init("gantt_here");
 
    gantt.load("/api/data");

    var dp = new gantt.dataProcessor("/api");
    dp.init(gantt);
    dp.setTransactionMode("REST");

</script>
</body>