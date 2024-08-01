<body>
  <div id="pdfcontent">
    <!-- Add HTML content you want to include in PDF here -->
    <h2>Payed Users</h2>
    <p>John Doe</p>
    <p>Jane Smith</p>
    <img src="image1.jpg" alt="Image 1">
    <img src="image2.jpg" alt="Image 2">
  </div>
  <button id="download">Download PDF</button>

  <!-- Add html2pdf and jsPDF libraries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>

  <!-- Add the JavaScript code you provided -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.getElementById("download").addEventListener("click", () => {
        const pdfcontent = document.getElementById("pdfcontent");
        
        // add Boot Bazzar text in center at the top
        const bootBazzar = document.createElement("h1");
        bootBazzar.textContent = "Fabie's kids wear";
        bootBazzar.style.textAlign = "center";
        pdfcontent.insertBefore(bootBazzar, pdfcontent.firstChild);

        var opt = {
          margin: 1,
          filename: 'orderdetails.pdf',
          image: { type: 'jpeg', quality: 0.99 },
          html2canvas: { scale: 2 },
          jsPDF: { unit: 'in', format: 'a3', orientation: 'p' }
        };
        const images = pdfcontent.querySelectorAll('img');
        Promise.all(Array.from(images).map((img) => {
          if (img.complete) return Promise.resolve();
          return new Promise((resolve) => {
            img.addEventListener('load', resolve);
            img.addEventListener('error', resolve);
          });
        })).then(() => {
          html2pdf().from(pdfcontent).set(opt).save();
        });
      });
    });
  </script>
</body>

