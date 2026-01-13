<?php
  if (!isset($_GET['view'])) {
    header('Location: index.php?view=visitor');
    exit;
  }
?>

<?php 
  if ($_GET['view'] == 'visitor') {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UvA CCI</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <h1>Complex Cyber Infrastructure Group</h1>

    <p>The UvA Complex Cyber Infrastructure Group focusses on improving trustworthyness of complex computer systems. Their expertise includes decentralized systems such as cloud platforms and blockchain technologies. The group conducts research targeted at adhering to defined policies, security and privacy measures and sustainability. In addition, as part of the Informatics Institute, they also teach computer science students.</p>

    <h2>Research done by the CCI</h2>

    <h3>A risk-level assessment system based on the STRIDE/DREAD model for digital data marketplaces</h3>
    <h5>Authors: Lu Zhang, Arie Taal, Reginal Cushing, Cees de Laat and Paola Grosso</h5>

    <button id="viewInfoOne" class="viewPdfButton" data-path="infographics/test.pdf" data-container="pdfContainerOne">View Infographic (Flag needed)</button>
    <div id="pdfContainerOne" class="pdfContainer" style="display: none"></div>

    <script>
        const pdfButtons = document.querySelectorAll('.viewPdfButton');

        pdfButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const container_id = btn.getAttribute('data-container');
                const container = document.getElementById(container_id)

                let isVisible = container.style.display === 'block';
                
                if (isVisible) {
                    container.style.display = 'none';
                    btn.textContent = 'View Infographic (Flag needed)';
                } else {
                    const path = btn.getAttribute('data-path');
                    
                    let iframe = container.querySelector('iframe');
                    if (!iframe) {
                        iframe =document.createElement('iframe');
                        iframe.src = path;
                        container.appendChild(iframe);
                    }
                    container.style.display = 'block';
                    btn.textContent = 'Hide Infographic';

                    iframe.requestFullscreen();
                }
            })
        })
    </script>
  </body>
</html>
<?php } else { ?>
  <p>You have escalated your priviledge, which is the E in STRIDE.</p>
  <p>Find out more about A risk-level assessment system based on the STRIDE/DREAD model for
digital data marketplaces, by accessing the infographic using the password: EscalatedView </p>
<?php } ?>

