<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jquery.bracket.min.css" />
    <title>Document</title>
</head>
<body>
<div class="tournament"></div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="jquery.bracket.min.js"></script>
    <script>
       
var autoCompleteData = {
    teams : [
      ['fi:Team 1', 'se:Team 2'],
      [null, null]
    ],
    results : []
  }
 
/* Data for autocomplete */
var acData = ["kr:MC", "ca:HuK", "se:Naniwa", "pe:Fenix",
              "us:IdrA", "tw:Sen", "fi:Naama"]
 
/* If you call doneCb([value], true), the next edit will be automatically 
   activated. This works only in the first round. */
function acEditFn(container, data, doneCb) {
  var input = $('<input type="text">')
  input.val(data)
  input.autocomplete({ source: acData })
  input.blur(function() { doneCb(input.val()) })
  input.keyup(function(e) { if ((e.keyCode||e.which)===13) input.blur() })
  container.html(input)
  input.focus()
}
 
function acRenderFn(container, data, score, state) {
  switch(state) {
    case 'empty-bye':
      container.append('BYE')
      return;
    case 'empty-tbd':
      container.append('TBD')
      return;
 
    case 'entry-no-score':
    case 'entry-default-win':
    case 'entry-complete':
      var fields = data.split(':')
      if (fields.length != 2)
        container.append('<i>INVALID</i>')
      else
        container.append('<img src="site/png/'+fields[0]+'.png"> ').append(fields[1])
      return;
  }
}
 
$(function() {
    $('.tournament').bracket({
      init: autoCompleteData,
      save: function(){}, /* without save() labels are disabled */
      decorator: {edit: acEditFn,
                  render: acRenderFn}})
  })
    </script>
</body>
</html>