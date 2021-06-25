const deleteSubcategory = (subcategoryId) => {
  return axios.post('/admin/subcategories/delete', {
    id: subcategoryId,
    _method: 'DELETE',
  });
};

const deleteCategory = (categoryId) => {
  return axios.post('/admin/categories/delete', {
    id: categoryId,
    _method: 'DELETE',
  });
};

const deleteProduct = (productId) => {
  return axios.post('/admin/products/delete', {
    id: productId,
    _method: 'DELETE',
  });
};

const deleteProductFromOrder = (productId, orderId) => {
  return axios.post('/order/deleteProduct', {
    productId,
    orderId,
  });
};

export { deleteSubcategory, deleteCategory, deleteProduct, deleteProductFromOrder };