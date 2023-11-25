$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRow(id,url)
{
    if (confirm('bạn có muốn xoá không?')){
        $.ajax({
            type : 'DELETE',
            datatype : 'JSON',
            data : {id},
            url : url,
            success: function (result){
                if(result.error === false){
                    location.reload();
                    alert(result.message);
                    
                }else{
                    alert('xoá lỗi vui lòng thử lại');
                }
            }
        })
    }
}