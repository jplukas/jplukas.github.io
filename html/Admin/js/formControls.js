function setSubmit(){
  $('form').submit(function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    var form = $(this);
    $.ajax({
      type: form.attr('method'),
      url: form.attr('action'),
      data: formData,
      processData: false,
      contentType: false,
    }).done(function(data) {
        
    }).fail(function(data) {
        
    });
  });
}
$(function() {
  setSubmit();
});
function anula(i){
  i.value=null;
  //carregar(i.parentNode);
}
function carregar(form){
  $(form).find(':file').each(function(index){
    if(this.files[0] !== undefined){
      var img = '/images/slider/' + this.files[0].name;
      $(form).find('input:hidden[name=' + this.id +']').val(img);
    }
    else{
      var img = this.name;
      $(form).find('input:hidden[name=' + this.id +']').val(img);
    }
  });
}
function salvar(){
    setSubmit();
    $('form').trigger('submit').re();
}
function re(){
  location.reload();
}