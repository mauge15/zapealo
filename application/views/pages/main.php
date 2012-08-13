<script>


	$(function() {
	 
		$( "#register_window" ).dialog({
			autoOpen: false,
			modal: true,
			height: 500,
			width: 500,
			show: "blind"
		});
		
		$( "#datepicker" ).datepicker();
	});
	
$(".ui-widget-overlay").live("click", function() {  $("#register_window").dialog("close"); } );

</script>


<div id="content1" onclick="$('#register_window').dialog('open');">REGISTRADO</div>