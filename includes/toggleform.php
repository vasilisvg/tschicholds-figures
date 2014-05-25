
<form action="#g">
    <button id="toggle">Toggle background</button>
</form>
<script>
document.getElementById('toggle').onclick = function(e){
    document.querySelector('body').classList.toggle('flat');
    e.preventDefault();
}
</script>
