<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Codeigniter</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
	<style>
		/*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}main{display:block}h1{font-size:2em;margin:.67em 0}hr{box-sizing:content-box;height:0;overflow:visible}pre{font-family:monospace,monospace;font-size:1em}a{background-color:transparent}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace,monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}fieldset{padding:.35em .75em .625em}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{vertical-align:baseline}textarea{overflow:auto}[type=checkbox],[type=radio]{box-sizing:border-box;padding:0}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details{display:block}summary{display:list-item}template{display:none}[hidden]{display:none}

		/*Custom Style Here*/
		body{
			color: #455a64;
			font-family: 'Open Sans', sans-serif;
			font-size: 0.875em;
			margin: 0;
		}
		[role=button], 
		a, 
		area, 
		button, 
		input:not([type=range]), 
		label, 
		select, 
		summary, 
		textarea {
		    -ms-touch-action: manipulation;
		    touch-action: manipulation;
		}
		[type=reset], [type=submit], button, html [type=button] {
		    -webkit-appearance: button;
		}
		h1{
			font-size: 28px;
		}
		.wrap{
			max-width: 1024px;
			width: 100%;
			margin: auto;
		}
		table{
			width: 100%;
		}
		th {
		    font-weight: 500;
		    text-align: left;
		}
		table>thead>tr>th {
		    border-bottom-color: #ccc;
		}
		table tr {
		    padding-bottom: 20px;
		}
		table td, 
		table th {
		    border-top: 1px solid #dee2e6;
		    padding: 1.25rem 0.75rem;
		    vertical-align: top;
		}
		.btn{
			background-color: #11c15b;
    		border: 1px solid #11c15b;
    		border-radius: 2px;

    		color: #fff;
    		padding: 8px 14px;
		    line-height: 16px;
		    font-size: 11px;

		    text-decoration: none;
		    -webkit-transition: all ease-in 0.3s;
    		transition: all ease-in 0.3s;
		}
		.btn:hover{
			background-color: #1aeb72;
    		border-color: #1aeb72;
		}
		.btn-red{
			background-color: #ff5252;
    		border-color: #ff5252;
		}
		.btn-red:hover{
			background-color: #ff8585;
    		border-color: #ff8585;
		}
		.btn-yellow{
			background-color: #ffe100;
    		border-color: #ffe100;
		}
		.btn-yellow:hover{
			background-color: #ffe733;
    		border-color: #ffe733;
		}
		.btn-default{
			font-size: 15px;
			padding: 10px 19px;
		}
		.form-group {
		    margin-bottom: 1.25em;
		}
		.form-control {
		    display: inline-block;
		    height: 43px;
		    width: 100%;
		    border: none;
		    border-radius: 0;
		    font-size: 16px;
		    font-weight: 400;
		    padding: 0;
		    background-color: transparent;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		    border-bottom: 1px solid #ccc;
		}
		.form-label {
		    pointer-events: none;
		    font-size: 14px;
		    font-weight: 400;
		    transition: 0.2s ease all;
		    -moz-transition: 0.2s ease all;
		    -webkit-transition: 0.2s ease all;
		}
		.form-control:focus {
		    border-color: transparent;
		    border-bottom-color: #d6d6d6;
		    outline: none;
		    -webkit-box-shadow: none;
		    box-shadow: none;
		}
		.modal{
			display: none;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}
		.modal-wrap{
			background: #fff;
		    position: relative;
		    
		    max-width: 400px;
		    width: 100%;
		    text-align: center;
		    padding: 10px;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    z-index: 1;
		}
		.modal-overlay{
			background: #000;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: 0;
			opacity: 0.6;
		}
		.modal .btn{
			display: inline-block;
		}
		.h1{
			font-size: 20px;
			margin: 10px 0 1em;
		}
	</style>
</head>
<body>
	<div class="wrap">
		