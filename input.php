<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Choice List - INPUT</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="./counsellingcode.js"></script>
	<script src="./counsellingrank.js"></script>
	<style>
		input[type=text], input[type=number], select {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
		}

		input[type=submit] {
		width: 100%;
		background-color: #4CAF50;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		}

		input[type=submit]:hover {
		background-color: #45a049;
		}

		div {
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		}
	</style>
</head>

<body>
		<h1>Storing Form data in Database</h1>
<div>
		<form action="" method="post">
			
			
<p>
				<label for="College_Code">College Code :</label>
				<input type="number" name="College_Code" id="College_Code" value=1 autocomplete="off" oninput="Code(); Cutoff(); return false;">
			</p>



			
			
<p>
				<label for="College_Name">College Name :</label>
				<select name="College_Name" id="College_Name" autocomplete="off" onchange="College(); Cutoff(); return false;">
					<option value="" id="testoption1"></option>
					<option value="" id="testoption2"></option>
					<option value="" id="testoption3"></option>
					<option value="" id="testoption4"></option>
					<option value="" id="testoption5"></option>
					<option value="" id="testoption6"></option>
					<option value="" id="testoption7"></option>
					<option value="" id="testoption8"></option>
					<option value="" id="testoption9"></option>
					<option value="" id="testoption10"></option>
					<option value="" id="testoption11"></option>
					<option value="" id="testoption12"></option>
					<option value="" id="testoption13"></option>
					<option value="" id="testoption14"></option>
					<option value="" id="testoption15"></option>
					<option value="" id="testoption16"></option>
					<option value="" id="testoption17"></option>
					<option value="" id="testoption18"></option>
					<option value="" id="testoption19"></option>
					<option value="" id="testoption20"></option>
					<option value="" id="testoption21"></option>
					<option value="" id="testoption22"></option>
					<option value="" id="testoption23"></option>
					<option value="" id="testoption24"></option>
					<option value="" id="testoption25"></option>
					<option value="" id="testoption26"></option>
					<option value="" id="testoption27"></option>
					<option value="" id="testoption28"></option>
					<option value="" id="testoption29"></option>
					<option value="" id="testoption30"></option>
					<option value="" id="testoption31"></option>
					<option value="" id="testoption32"></option>
					<option value="" id="testoption33"></option>
					<option value="" id="testoption34"></option>
					<option value="" id="testoption35"></option>
					<option value="" id="testoption36"></option>
					<option value="" id="testoption37"></option>
					<option value="" id="testoption38"></option>
					<option value="" id="testoption39"></option>
					<option value="" id="testoption40"></option>
					<option value="" id="testoption41"></option>
					<option value="" id="testoption42"></option>
					<option value="" id="testoption43"></option>
					<option value="" id="testoption44"></option>
					<option value="" id="testoption45"></option>
					<option value="" id="testoption46"></option>
					<option value="" id="testoption47"></option>
					<option value="" id="testoption48"></option>
					<option value="" id="testoption49"></option>
					<option value="" id="testoption50"></option>
					<option value="" id="testoption51"></option>
					<option value="" id="testoption52"></option>
					<option value="" id="testoption53"></option>
					<option value="" id="testoption54"></option>
					<option value="" id="testoption55"></option>
					<option value="" id="testoption56"></option>
					<option value="" id="testoption57"></option>
					<option value="" id="testoption58"></option>
					<option value="" id="testoption59"></option>
					<option value="" id="testoption60"></option>
					<option value="" id="testoption61"></option>
					<option value="" id="testoption62"></option>
					<option value="" id="testoption63"></option>
					<option value="" id="testoption64"></option>
					<option value="" id="testoption65"></option>
					<option value="" id="testoption66"></option>
					<option value="" id="testoption67"></option>
					<option value="" id="testoption68"></option>
					<option value="" id="testoption69"></option>
					<option value="" id="testoption70"></option>
					<option value="" id="testoption71"></option>
					<option value="" id="testoption72"></option>
					<option value="" id="testoption73"></option>
					<option value="" id="testoption74"></option>
					<option value="" id="testoption75"></option>
					<option value="" id="testoption76"></option>
					<option value="" id="testoption77"></option>
					<option value="" id="testoption78"></option>
					<option value="" id="testoption79"></option>
					<option value="" id="testoption80"></option>
					<option value="" id="testoption81"></option>
					<option value="" id="testoption82"></option>
					<option value="" id="testoption83"></option>
					<option value="" id="testoption84"></option>
					<option value="" id="testoption85"></option>
					<option value="" id="testoption86"></option>
					<option value="" id="testoption87"></option>
					<option value="" id="testoption88"></option>
					<option value="" id="testoption89"></option>
					<option value="" id="testoption90"></option>
					<option value="" id="testoption91"></option>
					<option value="" id="testoption92"></option>
					<option value="" id="testoption93"></option>
					<option value="" id="testoption94"></option>
					<option value="" id="testoption95"></option>
					<option value="" id="testoption96"></option>
					<option value="" id="testoption97"></option>
					<option value="" id="testoption98"></option>
					<option value="" id="testoption99"></option>
					<option value="" id="testoption100"></option>
					<option value="" id="testoption101"></option>
					<option value="" id="testoption102"></option>
					<option value="" id="testoption103"></option>
					<option value="" id="testoption104"></option>
					<option value="" id="testoption105"></option>
					<option value="" id="testoption106"></option>
					<option value="" id="testoption107"></option>
					<option value="" id="testoption108"></option>
					<option value="" id="testoption109"></option>
					<option value="" id="testoption110"></option>
					<option value="" id="testoption111"></option>
					<option value="" id="testoption112"></option>
					<option value="" id="testoption113"></option>
					<option value="" id="testoption114"></option>
					<option value="" id="testoption115"></option>
					<option value="" id="testoption116"></option>
					<option value="" id="testoption117"></option>
					<option value="" id="testoption118"></option>
					<option value="" id="testoption119"></option>
					<option value="" id="testoption120"></option>
					<option value="" id="testoption121"></option>
					<option value="" id="testoption122"></option>
					<option value="" id="testoption123"></option>
					<option value="" id="testoption124"></option>
					<option value="" id="testoption125"></option>
					<option value="" id="testoption126"></option>
					<option value="" id="testoption127"></option>
					<option value="" id="testoption128"></option>
					<option value="" id="testoption129"></option>
					<option value="" id="testoption130"></option>
					<option value="" id="testoption131"></option>
					<option value="" id="testoption132"></option>
					<option value="" id="testoption133"></option>
					<option value="" id="testoption134"></option>
					<option value="" id="testoption135"></option>
					<option value="" id="testoption136"></option>
					<option value="" id="testoption137"></option>
					<option value="" id="testoption138"></option>
					<option value="" id="testoption139"></option>
					<option value="" id="testoption140"></option>
					<option value="" id="testoption141"></option>
					<option value="" id="testoption142"></option>
					<option value="" id="testoption143"></option>
					<option value="" id="testoption144"></option>
					<option value="" id="testoption145"></option>
					<option value="" id="testoption146"></option>
					<option value="" id="testoption147"></option>
					<option value="" id="testoption148"></option>
					<option value="" id="testoption149"></option>
					<option value="" id="testoption150"></option>
					<option value="" id="testoption151"></option>
					<option value="" id="testoption152"></option>
					<option value="" id="testoption153"></option>
					<option value="" id="testoption154"></option>
					<option value="" id="testoption155"></option>
					<option value="" id="testoption156"></option>
					<option value="" id="testoption157"></option>
					<option value="" id="testoption158"></option>
					<option value="" id="testoption159"></option>
					<option value="" id="testoption160"></option>
					<option value="" id="testoption161"></option>
					<option value="" id="testoption162"></option>
					<option value="" id="testoption163"></option>
					<option value="" id="testoption164"></option>
					<option value="" id="testoption165"></option>
					<option value="" id="testoption166"></option>
					<option value="" id="testoption167"></option>
					<option value="" id="testoption168"></option>
					<option value="" id="testoption169"></option>
					<option value="" id="testoption170"></option>
					<option value="" id="testoption171"></option>
					<option value="" id="testoption172"></option>
					<option value="" id="testoption173"></option>
					<option value="" id="testoption174"></option>
					<option value="" id="testoption175"></option>
					<option value="" id="testoption176"></option>
					<option value="" id="testoption177"></option>
					<option value="" id="testoption178"></option>
					<option value="" id="testoption179"></option>
					<option value="" id="testoption180"></option>
					<option value="" id="testoption181"></option>
					<option value="" id="testoption182"></option>
					<option value="" id="testoption183"></option>
					<option value="" id="testoption184"></option>
					<option value="" id="testoption185"></option>
					<option value="" id="testoption186"></option>
					<option value="" id="testoption187"></option>
					<option value="" id="testoption188"></option>
					<option value="" id="testoption189"></option>
					<option value="" id="testoption190"></option>
					<option value="" id="testoption191"></option>
					<option value="" id="testoption192"></option>
					<option value="" id="testoption193"></option>
					<option value="" id="testoption194"></option>
					<option value="" id="testoption195"></option>
					<option value="" id="testoption196"></option>
					<option value="" id="testoption197"></option>
					<option value="" id="testoption198"></option>
					<option value="" id="testoption199"></option>
					<option value="" id="testoption200"></option>
					<option value="" id="testoption201"></option>
					<option value="" id="testoption202"></option>
					<option value="" id="testoption203"></option>
					<option value="" id="testoption204"></option>
					<option value="" id="testoption205"></option>
					<option value="" id="testoption206"></option>
					<option value="" id="testoption207"></option>
					<option value="" id="testoption208"></option>
					<option value="" id="testoption209"></option>
					<option value="" id="testoption210"></option>
					<option value="" id="testoption211"></option>
					<option value="" id="testoption212"></option>
					<option value="" id="testoption213"></option>
					<option value="" id="testoption214"></option>
					<option value="" id="testoption215"></option>
					<option value="" id="testoption216"></option>
					<option value="" id="testoption217"></option>
					<option value="" id="testoption218"></option>
					<option value="" id="testoption219"></option>
					<option value="" id="testoption220"></option>
					<option value="" id="testoption221"></option>
					<option value="" id="testoption222"></option>
					<option value="" id="testoption223"></option>
					<option value="" id="testoption224"></option>
					<option value="" id="testoption225"></option>
					<option value="" id="testoption226"></option>
					<option value="" id="testoption227"></option>
					<option value="" id="testoption228"></option>
					<option value="" id="testoption229"></option>
					<option value="" id="testoption230"></option>
					<option value="" id="testoption231"></option>
					<option value="" id="testoption232"></option>
					<option value="" id="testoption233"></option>
					<option value="" id="testoption234"></option>
					<option value="" id="testoption235"></option>
					<option value="" id="testoption236"></option>
					<option value="" id="testoption237"></option>
					<option value="" id="testoption238"></option>
					<option value="" id="testoption239"></option>
					<option value="" id="testoption240"></option>
					<option value="" id="testoption241"></option>
					<option value="" id="testoption242"></option>
					<option value="" id="testoption243"></option>
					<option value="" id="testoption244"></option>
					<option value="" id="testoption245"></option>
					<option value="" id="testoption246"></option>
					<option value="" id="testoption247"></option>
					<option value="" id="testoption248"></option>
					<option value="" id="testoption249"></option>
					<option value="" id="testoption250"></option>
					<option value="" id="testoption251"></option>
					<option value="" id="testoption252"></option>
					<option value="" id="testoption253"></option>
					<option value="" id="testoption254"></option>
					<option value="" id="testoption255"></option>
					<option value="" id="testoption256"></option>
					<option value="" id="testoption257"></option>
					<option value="" id="testoption258"></option>
					<option value="" id="testoption259"></option>
					<option value="" id="testoption260"></option>
					<option value="" id="testoption261"></option>
					<option value="" id="testoption262"></option>
					<option value="" id="testoption263"></option>
					<option value="" id="testoption264"></option>
					<option value="" id="testoption265"></option>
					<option value="" id="testoption266"></option>
					<option value="" id="testoption267"></option>
					<option value="" id="testoption268"></option>
					<option value="" id="testoption269"></option>
					<option value="" id="testoption270"></option>
					<option value="" id="testoption271"></option>
					<option value="" id="testoption272"></option>
					<option value="" id="testoption273"></option>
					<option value="" id="testoption274"></option>
					<option value="" id="testoption275"></option>
					<option value="" id="testoption276"></option>
					<option value="" id="testoption277"></option>
					<option value="" id="testoption278"></option>
					<option value="" id="testoption279"></option>
					<option value="" id="testoption280"></option>
					<option value="" id="testoption281"></option>
					<option value="" id="testoption282"></option>
					<option value="" id="testoption283"></option>
					<option value="" id="testoption284"></option>
					<option value="" id="testoption285"></option>
					<option value="" id="testoption286"></option>
					<option value="" id="testoption287"></option>
					<option value="" id="testoption288"></option>
					<option value="" id="testoption289"></option>
					<option value="" id="testoption290"></option>
					<option value="" id="testoption291"></option>
					<option value="" id="testoption292"></option>
					<option value="" id="testoption293"></option>
					<option value="" id="testoption294"></option>
					<option value="" id="testoption295"></option>
					<option value="" id="testoption296"></option>
					<option value="" id="testoption297"></option>
					<option value="" id="testoption298"></option>
					<option value="" id="testoption299"></option>
					<option value="" id="testoption300"></option>
					<option value="" id="testoption301"></option>
					<option value="" id="testoption302"></option>
					<option value="" id="testoption303"></option>
					<option value="" id="testoption304"></option>
					<option value="" id="testoption305"></option>
					<option value="" id="testoption306"></option>
					<option value="" id="testoption307"></option>
					<option value="" id="testoption308"></option>
					<option value="" id="testoption309"></option>
					<option value="" id="testoption310"></option>
					<option value="" id="testoption311"></option>
					<option value="" id="testoption312"></option>
					<option value="" id="testoption313"></option>
					<option value="" id="testoption314"></option>
					<option value="" id="testoption315"></option>
					<option value="" id="testoption316"></option>
					<option value="" id="testoption317"></option>
					<option value="" id="testoption318"></option>
					<option value="" id="testoption319"></option>
					<option value="" id="testoption320"></option>
					<option value="" id="testoption321"></option>
					<option value="" id="testoption322"></option>
					<option value="" id="testoption323"></option>
					<option value="" id="testoption324"></option>
					<option value="" id="testoption325"></option>
					<option value="" id="testoption326"></option>
					<option value="" id="testoption327"></option>
					<option value="" id="testoption328"></option>
					<option value="" id="testoption329"></option>
					<option value="" id="testoption330"></option>
					<option value="" id="testoption331"></option>
					<option value="" id="testoption332"></option>
					<option value="" id="testoption333"></option>
					<option value="" id="testoption334"></option>
					<option value="" id="testoption335"></option>
					<option value="" id="testoption336"></option>
					<option value="" id="testoption337"></option>
					<option value="" id="testoption338"></option>
					<option value="" id="testoption339"></option>
					<option value="" id="testoption340"></option>
					<option value="" id="testoption341"></option>
					<option value="" id="testoption342"></option>
					<option value="" id="testoption343"></option>
					<option value="" id="testoption344"></option>
					<option value="" id="testoption345"></option>
					<option value="" id="testoption346"></option>
					<option value="" id="testoption347"></option>
					<option value="" id="testoption348"></option>
					<option value="" id="testoption349"></option>
					<option value="" id="testoption350"></option>
					<option value="" id="testoption351"></option>
					<option value="" id="testoption352"></option>
					<option value="" id="testoption353"></option>
					<option value="" id="testoption354"></option>
					<option value="" id="testoption355"></option>
					<option value="" id="testoption356"></option>
					<option value="" id="testoption357"></option>
					<option value="" id="testoption358"></option>
					<option value="" id="testoption359"></option>
					<option value="" id="testoption360"></option>
					<option value="" id="testoption361"></option>
					<option value="" id="testoption362"></option>
					<option value="" id="testoption363"></option>
					<option value="" id="testoption364"></option>
					<option value="" id="testoption365"></option>
					<option value="" id="testoption366"></option>
					<option value="" id="testoption367"></option>
					<option value="" id="testoption368"></option>
					<option value="" id="testoption369"></option>
					<option value="" id="testoption370"></option>
					<option value="" id="testoption371"></option>
					<option value="" id="testoption372"></option>
					<option value="" id="testoption373"></option>
					<option value="" id="testoption374"></option>
					<option value="" id="testoption375"></option>
					<option value="" id="testoption376"></option>
					<option value="" id="testoption377"></option>
					<option value="" id="testoption378"></option>
					<option value="" id="testoption379"></option>
					<option value="" id="testoption380"></option>
					<option value="" id="testoption381"></option>
					<option value="" id="testoption382"></option>
					<option value="" id="testoption383"></option>
					<option value="" id="testoption384"></option>
					<option value="" id="testoption385"></option>
					<option value="" id="testoption386"></option>
					<option value="" id="testoption387"></option>
					<option value="" id="testoption388"></option>
					<option value="" id="testoption389"></option>
					<option value="" id="testoption390"></option>
					<option value="" id="testoption391"></option>
					<option value="" id="testoption392"></option>
					<option value="" id="testoption393"></option>
					<option value="" id="testoption394"></option>
					<option value="" id="testoption395"></option>
					<option value="" id="testoption396"></option>
					<option value="" id="testoption397"></option>
					<option value="" id="testoption398"></option>
					<option value="" id="testoption399"></option>
					<option value="" id="testoption400"></option>
					<option value="" id="testoption401"></option>
					<option value="" id="testoption402"></option>
					<option value="" id="testoption403"></option>
					<option value="" id="testoption404"></option>
					<option value="" id="testoption405"></option>
					<option value="" id="testoption406"></option>
					<option value="" id="testoption407"></option>
					<option value="" id="testoption408"></option>
					<option value="" id="testoption409"></option>
					<option value="" id="testoption410"></option>
					<option value="" id="testoption411"></option>
					<option value="" id="testoption412"></option>
					<option value="" id="testoption413"></option>
					<option value="" id="testoption414"></option>
					<option value="" id="testoption415"></option>
					<option value="" id="testoption416" selected></option>
					<option value="" id="testoption417"></option>
					<option value="" id="testoption418"></option>
					<option value="" id="testoption419"></option>
					<option value="" id="testoption420"></option>
					<option value="" id="testoption421"></option>
					<option value="" id="testoption422"></option>
					<option value="" id="testoption423"></option>
					<option value="" id="testoption424"></option>
					<option value="" id="testoption425"></option>
					<option value="" id="testoption426"></option>
					<option value="" id="testoption427"></option>
					<option value="" id="testoption428"></option>
					<option value="" id="testoption429"></option>
					<option value="" id="testoption430"></option>
					<option value="" id="testoption431"></option>
					<option value="" id="testoption432"></option>
					<option value="" id="testoption433"></option>
					<option value="" id="testoption434"></option>
					<option value="" id="testoption435"></option>
					<option value="" id="testoption436"></option>
					<option value="" id="testoption437"></option>
					<option value="" id="testoption438"></option>
					<option value="" id="testoption439"></option>
					<option value="" id="testoption440"></option>
					<option value="" id="testoption441"></option>
				</select>
			</p>



			
			
<p>
				<label for="Branch_Code">Branch Code :</label>
				<select name="Branch_Code" id="Branch_Code" onchange="Branch(); Cutoff(); return false;">
					<option value="" id="branchcode1"></option>
					<option value="" id="branchcode2"></option>
					<option value="" id="branchcode3"></option>
					<option value="" id="branchcode4"></option>
					<option value="" id="branchcode5"></option>
					<option value="" id="branchcode6"></option>
					<option value="" id="branchcode7"></option>
					<option value="" id="branchcode8"></option>
					<option value="" id="branchcode9"></option>
					<option value="" id="branchcode10"></option>
					<option value="" id="branchcode11"></option>
					<option value="" id="branchcode12"></option>
					<option value="" id="branchcode13"></option>
					<option value="" id="branchcode14"></option>
					<option value="" id="branchcode15"></option>
					<option value="" id="branchcode16"></option>
					<option value="" id="branchcode17"></option>
					<option value="" id="branchcode18"></option>
					<option value="" id="branchcode19"></option>
					<option value="" id="branchcode20"></option>
					<option value="" id="branchcode21"></option>
					<option value="" id="branchcode22"></option>
					<option value="" id="branchcode23"></option>
					<option value="" id="branchcode24"></option>
					<option value="" id="branchcode25"></option>
					<option value="" id="branchcode26" selected></option>
					<option value="" id="branchcode27"></option>
					<option value="" id="branchcode28"></option>
					<option value="" id="branchcode29"></option>
					<option value="" id="branchcode30"></option>
					<option value="" id="branchcode31"></option>
					<option value="" id="branchcode32"></option>
					<option value="" id="branchcode33"></option>
					<option value="" id="branchcode34"></option>
					<option value="" id="branchcode35"></option>
					<option value="" id="branchcode36"></option>
					<option value="" id="branchcode37"></option>
					<option value="" id="branchcode38"></option>
					<option value="" id="branchcode39"></option>
					<option value="" id="branchcode40"></option>
					<option value="" id="branchcode41"></option>
					<option value="" id="branchcode42"></option>
					<option value="" id="branchcode43"></option>
					<option value="" id="branchcode44"></option>
					<option value="" id="branchcode45"></option>
					<option value="" id="branchcode46"></option>
					<option value="" id="branchcode47"></option>
					<option value="" id="branchcode48"></option>
					<option value="" id="branchcode49"></option>
					<option value="" id="branchcode50"></option>
					<option value="" id="branchcode51"></option>
					<option value="" id="branchcode52"></option>
					<option value="" id="branchcode53"></option>
					<option value="" id="branchcode54"></option>
					<option value="" id="branchcode55"></option>
					<option value="" id="branchcode56"></option>
					<option value="" id="branchcode57"></option>
					<option value="" id="branchcode58"></option>
					<option value="" id="branchcode59"></option>
					<option value="" id="branchcode60"></option>
					<option value="" id="branchcode61"></option>
					<option value="" id="branchcode62"></option>
					<option value="" id="branchcode63"></option>
					<option value="" id="branchcode64"></option>
					<option value="" id="branchcode65"></option>
					<option value="" id="branchcode66"></option>
					<option value="" id="branchcode67"></option>
					<option value="" id="branchcode68"></option>
					<option value="" id="branchcode69"></option>
					<option value="" id="branchcode70"></option>
					<option value="" id="branchcode71"></option>
					<option value="" id="branchcode72"></option>
					<option value="" id="branchcode73"></option>
					<option value="" id="branchcode74"></option>
					<option value="" id="branchcode75"></option>
					<option value="" id="branchcode76"></option>
					<option value="" id="branchcode77"></option>
					<option value="" id="branchcode78"></option>
					<option value="" id="branchcode79"></option>
					<option value="" id="branchcode80"></option>
					<option value="" id="branchcode81"></option>
					<option value="" id="branchcode82"></option>
					<option value="" id="branchcode83"></option>
					<option value="" id="branchcode84"></option>
					<option value="" id="branchcode85"></option>
					<option value="" id="branchcode86"></option>
					<option value="" id="branchcode87"></option>
					<option value="" id="branchcode88"></option>
					<option value="" id="branchcode89"></option>
					<option value="" id="branchcode90"></option>
					<option value="" id="branchcode91"></option>
					<option value="" id="branchcode92"></option>
					<option value="" id="branchcode93"></option>
					<option value="" id="branchcode94"></option>
				</select>
			</p>



			
			
<p>
				<label for="Branch_Name">Branch Name :</label>
				<select name="Branch_Name" id="Branch_Name" onchange="BranchName(); Cutoff(); return false;">
					<option value="" id="branchoption1"></option>
					<option value="" id="branchoption2"></option>
					<option value="" id="branchoption3"></option>
					<option value="" id="branchoption4"></option>
					<option value="" id="branchoption5"></option>
					<option value="" id="branchoption6"></option>
					<option value="" id="branchoption7"></option>
					<option value="" id="branchoption8"></option>
					<option value="" id="branchoption9"></option>
					<option value="" id="branchoption10"></option>
					<option value="" id="branchoption11"></option>
					<option value="" id="branchoption12"></option>
					<option value="" id="branchoption13"></option>
					<option value="" id="branchoption14"></option>
					<option value="" id="branchoption15"></option>
					<option value="" id="branchoption16"></option>
					<option value="" id="branchoption17"></option>
					<option value="" id="branchoption18"></option>
					<option value="" id="branchoption19"></option>
					<option value="" id="branchoption20"></option>
					<option value="" id="branchoption21"></option>
					<option value="" id="branchoption22"></option>
					<option value="" id="branchoption23"></option>
					<option value="" id="branchoption24"></option>
					<option value="" id="branchoption25" selected></option>
					<option value="" id="branchoption26"></option>
					<option value="" id="branchoption27"></option>
					<option value="" id="branchoption28"></option>
					<option value="" id="branchoption29"></option>
					<option value="" id="branchoption30"></option>
					<option value="" id="branchoption31"></option>
					<option value="" id="branchoption32"></option>
					<option value="" id="branchoption33"></option>
					<option value="" id="branchoption34"></option>
					<option value="" id="branchoption35"></option>
					<option value="" id="branchoption36"></option>
					<option value="" id="branchoption37"></option>
					<option value="" id="branchoption38"></option>
					<option value="" id="branchoption39"></option>
					<option value="" id="branchoption40"></option>
					<option value="" id="branchoption41"></option>
					<option value="" id="branchoption42"></option>
					<option value="" id="branchoption43"></option>
					<option value="" id="branchoption44"></option>
					<option value="" id="branchoption45"></option>
					<option value="" id="branchoption46"></option>
					<option value="" id="branchoption47"></option>
					<option value="" id="branchoption48"></option>
					<option value="" id="branchoption49"></option>
					<option value="" id="branchoption50"></option>
					<option value="" id="branchoption51"></option>
					<option value="" id="branchoption52"></option>
					<option value="" id="branchoption53"></option>
					<option value="" id="branchoption54"></option>
					<option value="" id="branchoption55"></option>
					<option value="" id="branchoption56"></option>
					<option value="" id="branchoption57"></option>
					<option value="" id="branchoption58"></option>
					<option value="" id="branchoption59"></option>
					<option value="" id="branchoption60"></option>
					<option value="" id="branchoption61"></option>
					<option value="" id="branchoption62"></option>
					<option value="" id="branchoption63"></option>
					<option value="" id="branchoption64"></option>
					<option value="" id="branchoption65"></option>
					<option value="" id="branchoption66"></option>
					<option value="" id="branchoption67"></option>
					<option value="" id="branchoption68"></option>
					<option value="" id="branchoption69"></option>
					<option value="" id="branchoption70"></option>
					<option value="" id="branchoption71"></option>
					<option value="" id="branchoption72"></option>
					<option value="" id="branchoption73"></option>
					<option value="" id="branchoption74"></option>
					<option value="" id="branchoption75"></option>
					<option value="" id="branchoption76"></option>
					<option value="" id="branchoption77"></option>
					<option value="" id="branchoption78"></option>
					<option value="" id="branchoption79"></option>
					<option value="" id="branchoption80"></option>
					<option value="" id="branchoption81"></option>
					<option value="" id="branchoption82"></option>
					<option value="" id="branchoption83"></option>
					<option value="" id="branchoption84"></option>
					<option value="" id="branchoption85"></option>
					<option value="" id="branchoption86"></option>
					<option value="" id="branchoption87"></option>
					<option value="" id="branchoption88"></option>
					<option value="" id="branchoption89"></option>
					<option value="" id="branchoption90"></option>
					<option value="" id="branchoption91"></option>
					<option value="" id="branchoption92"></option>
					<option value="" id="branchoption93"></option>
					<option value="" id="branchoption94"></option>
				</select>
			</p>


			
			
			
<p>
				<label for="Closing_Cutoff">Closing Cutoff :</label>
				<input type="text" name="Closing_Cutoff" id="Closing_Cutoff" autocomplete="off" value="197">
			</p>


			
			
			
<p>
				<label for="Closing_Rank">Closing Rank :</label>
				<input type="text" name="Closing_Rank" id="Closing_Rank" autocomplete="off" value="105">
			</p>


			
			<input type="submit" value="Submit" name="SubmitButton">
		</form>
	</div>

		<?php
		include "db.php";
		
		if(isset($_POST['SubmitButton'])){

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect($servername, $user, $password, $database);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$College_Code = $_REQUEST['College_Code'];
		$College_Name = $_REQUEST['College_Name'];
		$Branch_Code = $_REQUEST['Branch_Code'];
		$Branch_Name = $_REQUEST['Branch_Name'];
		$Closing_Cutoff = $_REQUEST['Closing_Cutoff'];
		$Closing_Rank = $_POST['Closing_Rank'];
		
		// Performing insert query execution
		// here our table name is college
		$conn->query("ALTER TABLE counselling AUTO_INCREMENT = 1");
		$sql = "INSERT INTO counselling (College_Code, College_Name, Branch_Code, Branch_Name, Closing_Cutoff, Closing_Rank)
				VALUES ('$College_Code', '$College_Name', '$Branch_Code', '$Branch_Name', '$Closing_Cutoff', '$Closing_Rank')";		
		
		if(mysqli_query($conn, $sql)){

			$conn->query("SET @count = (SELECT COUNT(*) FROM counselling);");
            $conn->query("UPDATE counselling SET id = @count WHERE id = 0;");
			$conn->query("SET @a:=0;");
			$conn->query("UPDATE counselling SET id=@a:=@a+1 order by id;");

			// echo "<h3>Data stored in database successfully."
			// 	. " Please browse your localhost php my admin"
			// 	. " to view the updated data</h3>";

			// echo nl2br("\nCollege_Code : $College_Code\n College_Name : $College_Name\n "
			// 	. "Branch_Name : $Branch_Name\n Closing_Cutoff : $Closing_Cutoff");

			echo "<script>
			window.location.href='./crud.php';
			alert('Successfully added');
			</script>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
	}
		?>

	<script>
			var testarray = [...new Set(counsellingcode.map(item => item.con))];
			testarray.sort();
			for (let i = 0; i < testarray.length; i++) {
				var test = testarray[i];
				var b = i+1;
				var test123 = "testoption" + b;
				document.getElementById(test123).value=test;
				document.getElementById(test123).text=test;
			}

			var brancharray = [...new Set(counsellingcode.map(item => item.brn))];
			brancharray.sort();
			for (let i = 0; i < brancharray.length; i++) {
				var branch = brancharray[i];
				var b = i+1;
				var branch123 = "branchoption" + b;
				document.getElementById(branch123).value=branch;
				document.getElementById(branch123).text=branch;
			}

			var branchcodearray = [...new Set(counsellingcode.map(item => item.brc))];
			branchcodearray.sort();
			for (let i = 0; i < branchcodearray.length; i++) {
				var branchcode = branchcodearray[i];
				var b = i+1;
				var branchcode123 = "branchcode" + b;
				document.getElementById(branchcode123).value=branchcode;
				document.getElementById(branchcode123).text=branchcode;
			}

			function College() {
				var college = document.getElementById('College_Name').value;
				let collegecode = counsellingcode.filter(obj => {
				return obj.con === college;
			})
				var collegecode1 = collegecode[0].coc;
				document.getElementById('College_Code').value = collegecode1;
			}

			function Code() {
				var code = document.getElementById('College_Code').value;
				code = parseInt(code);
				let code1 = counsellingcode.filter(obj1 => {
				return obj1.coc === code;
			})
				var collegecode2 = code1[0].con;
				document.getElementById('College_Name').value = collegecode2;
			}

			function Branch() {
				var branchCode = document.getElementById('Branch_Code').value;
				let branchCode1 = counsellingcode.filter(obj1 => {
				return obj1.brc === branchCode;
			})
				var branchCode2 = branchCode1[0].brn;
				document.getElementById('Branch_Name').value = branchCode2;
			}

			function BranchName() {
				var branchName = document.getElementById('Branch_Name').value;
				let branchName1 = counsellingcode.filter(obj1 => {
				return obj1.brn === branchName;
			})
				var branchName2 = branchName1[0].brc;
				document.getElementById('Branch_Code').value = branchName2;
			}

			function Cutoff() {
				var college = document.getElementById('College_Name').value;
				var code = document.getElementById('College_Code').value;
				var branch = document.getElementById('Branch_Name').value;
				let collegecutoff = counsellingcode.filter(obj => {
					return obj.con == college &&
					       obj.coc == code &&
						   obj.brn == branch;
				});
				var collegecutoff2 = collegecutoff[0].BC;
				document.getElementById('Closing_Cutoff').value = collegecutoff2;

				let collegerank = counsellingrank.filter(obj => {
					return obj.con == college &&
					       obj.coc == code &&
						   obj.brn == branch;
				});
				console.log(collegerank);
				var collegerank2 = collegerank[0].BC;
				console.log(collegerank2);
				document.getElementById('Closing_Rank').value = collegerank2;
			}
	</script>
</body>

</html>