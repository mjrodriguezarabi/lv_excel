<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>EditableGrid - Minimal demo - Load grid from JSON</title>
		
								 <script src="{{ asset('js/editablegrid/editablegrid.js') }}"></script>
		<!-- [DO NOT DEPLOY] --> <script src="{{ asset('js/editablegrid/editablegrid_renderers.js') }}" ></script>
		<!-- [DO NOT DEPLOY] --> <script src="{{ asset('js/editablegrid/editablegrid_editors.js') }}" ></script>
		<!-- [DO NOT DEPLOY] --> <script src="{{ asset('js/editablegrid/editablegrid_validators.js') }}" ></script>
		<!-- [DO NOT DEPLOY] --> <script src="{{ asset('js/editablegrid/editablegrid_utils.js') }}" ></script>
		<!-- [DO NOT DEPLOY] --> <script src="{{ asset('js/editablegrid/editablegrid_charts.js') }}" ></script>
		<link rel="stylesheet" href="{{ asset('css/editablegrid/editablegrid.css') }}" type="text/css" media="screen">
		
		<style>
			body { font-family:'lucida grande', tahoma, verdana, arial, sans-serif; font-size:11px; }
			h1 { font-size: 15px; }
			a { color: #548dc4; text-decoration: none; }
			a:hover { text-decoration: underline; }
			table.testgrid { border-collapse: collapse; border: 1px solid #CCB; width: 800px; }
			table.testgrid td, table.testgrid th { padding: 5px; border: 1px solid #E0E0E0; }
			table.testgrid th { background: #E5E5E5; text-align: left; }
			input.invalid { background: red; color: #FDFDFD; }
		</style>
		
		<script>
			window.onload = function() {
				var data ={"metadata":[
	{"name":"name","class":"test","label":"NAME","datatype":"string","editable":true},
	{"name":"firstname","label":"FIRSTNAME","datatype":"string","editable":true},
	{"name":"age","label":"AGE","datatype":"integer","editable":true},
	{"name":"height","label":"HEIGHT","datatype":"double(m,2)","editable":true},
	{"name":"country","label":"COUNTRY","datatype":"string","editable":true,"values":
		{
			"Europe":{"be":"Belgium","fr":"France","uk":"Great-Britain","nl":"Nederland"},
			"America":{"br":"Brazil","ca":"Canada","us":"USA"},
			"Africa":{"ng":"Nigeria","za":"South-Africa","zw":"Zimbabwe"}}
		},
	{"name":"email","label":"EMAIL","datatype":"email","editable":true},
	{"name":"freelance","label":"FREELANCE","datatype":"boolean","editable":true},
	{"name":"lastvisit","label":"LAST VISIT","datatype":"date","editable":true}
],

"data":[
	{"id":1, "values":{"country":"uk","age":33,"name":"Duke","firstname":"Patience","height":1.842,"email":"patience.duke@gmail.com","lastvisit":"11\/12\/2002"}},
	{"id":2, "values":["Rogers","Denise",59,1.627,"us","rogers.d@gmail.com","","07\/05\/2003"]},
	{"id":3, "values":{"name":"Dujardin","firstname":"Antoine","age":21,"height":1.73,"country":"fr","email":"felix.compton@yahoo.fr","freelance":true,"lastvisit":"21\/02\/1999"}},
	{"id":4, "values":{"name":"Conway","firstname":"Coby","age":47,"height":1.96,"country":"za","email":"coby@conwayinc.com","freelance":true,"lastvisit":"01\/12\/2007"}},
	{"id":5, "values":{"name":"Shannon","firstname":"Rana","age":24,"height":1.56,"country":"nl","email":"ranna.shannon@hotmail.com","freelance":false,"lastvisit":"07\/10\/2009"}},
	{"id":6, "values":{"name":"Benton","firstname":"Jasmine","age":61,"height":1.71,"country":"ca","email":"jasmine.benton@yahoo.com","freelance":false,"lastvisit":"13\/01\/2009"}},
	{"id":7, "values":{"name":"Belletoise","firstname":"André","age":31,"height":1.84,"country":"be","email":"belletoise@kiloutou.be","freelance":true,"lastvisit":""}},
	{"id":8, "values":{"name":"Santa-Maria","firstname":"Martin","age":37,"height":1.80,"country":"br","email":"martin.sm@gmail.com","freelance":false,"lastvisit":"12\/06\/1995"}},
	{"id":9, "values":{"name":"Dieumerci","firstname":"Amédé","age":37,"height":1.81,"country":"ng","email":"dieumerci@gmail.com","freelance":true,"lastvisit":"05\/07\/2009"}},
	{"id":10,"values":{"name":"Morin","firstname":"Wanthus","age":46,"height":1.77,"country":"zw","email":"morin.x@yahoo.json.com","freelance":false,"lastvisit":"04\/03\/2004"}}
]};
				// editableGrid = new EditableGrid("DemoGrid"); 
				// editableGrid.tableLoaded = function() { this.renderGrid("tablecontent", "testgrid"); };
				// var url = '{{ url("/import-excel" )}}';
				// editableGrid.load(data);

				editableGrid = new EditableGrid("ImportExel");
				editableGrid.load(data);
				editableGrid.renderGrid("tablecontent", "testgrid");
			} 
		</script>
		
	</head>
	
	<body>
		<h1>EditableGrid - Minimal Demo - Loading grid from JSON - <a href="../index.html">Back to menu</a></h1> 
		<div id="tablecontent"></div>
	</body>

</html>
