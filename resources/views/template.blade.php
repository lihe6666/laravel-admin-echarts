<div id="chart-{{$chartId}}" style="height:{{$height}};">加载中...</div>
<script type="text/javascript">
    $(function () {
        // 基于准备好的dom，初始化echarts实例
        let options = JSON.parse('{!! $options !!}'),

            myChartId = document.querySelector('#chart-{{$chartId}}'),
            myChartInstance = echarts.init(myChartId, null, {
                renderer: 'canvas'
            });

        // 使用刚指定的配置项和数据显示图表。
        myChartInstance.setOption(options);


    });
</script>
