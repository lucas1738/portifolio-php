<html><body>
<script>
function muda() {
var x = document.getElementById("entrada").value;
document.getElementById("copia").value = x;
}
</script>
Entrada: <input id="entrada" type="text" onchange="muda()" />
<br/>
Cópia: <input id="copia" type="text" />
</body></html>