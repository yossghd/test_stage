<html>
  <head>
    <script src="./dist/bpmn-viewer.development.js"></script>
    <link href="./dist/bpmn-viewer.css" rel="stylesheet" />
  </head>
  <body>
    <div id="canvas"></div>
    <script>
      var bpmnJS = new BpmnJS({ container: '#canvas' });

      bpmnJS.importXML('<?php echo $bpmnXML; ?>', function(err) {
        if (err) {
          console.error('Could not import BPMN 2.0 diagram', err);
        } else {
          console.log('BPMN 2.0 diagram imported');
        }
      });
    </script>
  </body>
</html>