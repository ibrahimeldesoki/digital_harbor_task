$(document).ready(function() {
$(".confirm-delete").click(function(e) {
    e.preventDefault();
    swal({
        title: "Are you sure?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            e.preventDefault();
            var $this = $(this);
            console.log($this.attr('href'));
            $.ajax({
                method: 'POST',
                data: { _method: 'DELETE', _token: $('meta[name="csrf-token"]').attr('content')  },
                url: $this.attr('href')
            }).done(function (data) {
                if(data.action=='deleted')
                {
                    $this.closest('tr').remove();
                    swal(" Has been deleted!", {
                        icon: "success",
                      });
                }
            });

        } else {
          swal("Your imaginary file is safe!");
        }
      });
});
if($('div.alert.alert-success').length != 0) {
    setTimeout(() => {
        $('div.alert.alert-success').remove()
    },3000);
  };
});
