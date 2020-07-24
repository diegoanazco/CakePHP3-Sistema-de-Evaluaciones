<?php use Cake\Routing\Router; ?>
<script>
    $(window).load(function()
    {
        $("#test").focus();
        /**/
        $("#test" ).change(function()
        {
            var testId = $(this).val();
            //alert("ok1");
            /**/
            $.ajax(
                {
                    
                    type:'GET',
                    url: '<?php echo Router::url(array('controller'=>'Questions','action'=>'getQuestions'));?>' + '/'+ testId,
                    dataType:'json',
                    success:function(response)
                    {//alert("ok2");
                        if(Object.keys(response).length>0)
                        {
                            //console.log(response.length);
                            //alert("ok");
                            var options = "";
                            Object.keys(response).forEach(function(k){
                                //console.log(k + ' - ' + response[k]);
                                options += "<option value=\""+k+"\">"+response[k]+"</option>";

                            });
                            /**/
                            $('#questions').html(options);
                            /**/
                        }else{
                            $('#questions').html("");
                        }
                    }
                });
            /**/
        });
        /**/
    });
</script>
<?php

    echo $this->Form->select('test', $tests, ['empty' => '(Choose one test)', 'id'=>'test']);
    
    
     echo $this->Form->select('questions', null, ['id'=>'questions', 'size'=>20] );
?>
