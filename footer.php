<footer style="display: flex;justify-content: center; align-items: center;">
        <h2 style="color: red;">Nhóm 3 - Chiến Bách CB Giang</h2>
    </footer>
</div>
</body>


</html>
<script>
    let id = 0;
    let mang = [
        "img/1.jpg",
        "img/2.jpg",
        "img/3.jpg",
    ]

    function anh() {
        id++;
        if (id >= mang.length) {
            id = 0;
        }
        let anh = document.getElementById("anh");
        anh.src = mang[id];
    }
    id = setInterval(anh, 1000);
</script>