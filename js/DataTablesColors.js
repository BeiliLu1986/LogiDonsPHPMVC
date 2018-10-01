$(document).ready(function(){  
					$('#items_data').DataTable({
							dom: 'Bfrtip',
							buttons:[
									{ extend: 'print', text: 'Empprimer table' }
									],
									
							"language":{
										"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
										},
							"columnDefs":[{
												"targets": 3,
												"render": function(data, type, full, meta) {
															var cellText = $(data).text(); //Stripping html tags !!!
															if (type === 'display' &&  (cellText == "Nouveau" || data=='Nouveau')) {
																var rowIndex = meta.row+1;
																var colIndex = meta.col+1;
																$('#items_data tbody tr:nth-child('+rowIndex+')').addClass('lightGreen');
																$('#items_data tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('green');
																return data;
															} else if (type === 'display' &&  (cellText == "Accepté" || data=='Accepté')) {
																var rowIndex = meta.row+1;
																var colIndex = meta.col+1;
																$('#items_data tbody tr:nth-child('+rowIndex+')').addClass('lightBlue');
																$('#items_data tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('blue');
																return data;
															} else if (type === 'display' &&  (cellText == "Refusé" || data=='Refusé')) {
																var rowIndex = meta.row+1;
																var colIndex = meta.col+1;
																$('#items_data tbody tr:nth-child('+rowIndex+')').addClass('lightRed');
																$('#items_data tbody tr:nth-child('+rowIndex+') td:nth-child('+colIndex+')').addClass('red');
															return data;
															} else {
																	return data;
																}
														}
										}]
					});  
				});  