
<script>
			function add() {
				var a, b, c,grtotal,discount,sum,rate,quantity,amount1,amount2,amount3;
                rate1 = Number(document.getElementById('rate1').value);
                quantity1 = Number(document.getElementById('Quantity1').value);
                rate2 = Number(document.getElementById('rate2').value);
                quantity2 = Number(document.getElementById('Quantity2').value);
                rate3 = Number(document.getElementById('rate3').value);
                quantity3 = Number(document.getElementById('Quantity3').value);
                amount1 = Number(document.getElementById('Amount1').value);
				amount2= Number(document.getElementById('Amount2').value);
				amount3= Number(document.getElementById('Amount3').value);
				amount1= rate1* quantity1;
                amount2= rate2* quantity2;
                amount3= rate3* quantity3;
				document.getElementById('Amount1').value = amount1;
                document.getElementById('Amount2').value = amount2;
                document.getElementById('Amount3').value = amount3;
				sum = amount1 + amount2+ amount3;
				
				document.getElementById('total').value = sum;
                discount = Number(document.getElementById('discount').value);
                grtotal= sum-discount
                document.getElementById('gtotal').value = grtotal;
			}
</script>


<?php/*
			if(isset($_POST['scadd']) ){
                for($i=0;$i<=20;$i++){
                 $Amount=$_POST['Amount<?=$i?>']; //$rate$i = Number(document.getElementById('ratei').value);
                quantityi = Number(document.getElementById('Quantityi').value);
                ratei = Number(document.getElementById('ratei').value);
                quantityi = Number(document.getElementById('Quantityi').value);
                 amount1 = Number(document.getElementById('Amount1').value);
				amount2= Number(document.getElementById('Amount2').value);
				amount1= rate1* quantity1;
                amount2= rate2* quantity2;
				document.getElementById('Amount1').value = amount1;
                document.getElementById('Amount2').value = amount2;
            				sum = amount1 + amount2;
                }
				document.getElementById('total').value = sum;
                discount = Number(document.getElementById('discount').value);
                grtotal= sum-discount
                document.getElementById('gtotal').value = grtotal;

			}*/
?>   


