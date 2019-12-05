<script>
$(document).ready(function() {
	$('#{{ $table }}').DataTable({
		"language": {
		    "decimal":        ",",
		    "info":           "Zeige _START_ bis _END_ von _TOTAL_ Einträgen",
		    "infoEmpty":      "Zeige 0 bis 0 von 0 Einträgen",
		    "infoFiltered":   "(gefiltert von _MAX_ Einträgen)",
		    "infoPostFix":    "",
		    "thousands":      ".",
		    "lengthMenu":     "Zeige _MENU_ Einträge",
		    "loadingRecords": "Laden...",
		    "processing":     "Bitte warten...",
		    "search":         "Suche:",
		    "zeroRecords":    "Keine Einträge gefunden",
		    "paginate": {
		        "first":      "Erste",
		        "last":       "Letzte",
		        "next":       "Nächste",
		        "previous":   "Vorherige"
		    },
		},
	});
});
</script>
