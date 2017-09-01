function deleteProduct(proID) {
    var answer = confirm("Chắc chắn xóa sản phẩm này?");
    if(answer) {
        window.location = 'deleteProduct?productId='+proID;
    }
}
