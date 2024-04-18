<?php
class products_model extends CI_Model
{


	public function products_data_submit($data,$image)
	{
		$data = [
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
			'image' => $image,
        ];
		if ($this->db->insert('products', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function products_view()
{
    $result = $this->db->query(" SELECT * FROM products");

    if ($result->num_rows() > 0) {
        return $result->result();
    } else {
        return 0;
    }
}


// 	public function products_data_nm()
// {
//     $uid = $this->uri->segment(2);

//     $result = $this->db->query("
//         SELECT 
//             products.*, 
//             blog_category.category AS blog_category 
//         FROM 
//             products
//         LEFT JOIN 
//             blog ON products.blog_name = blog.id
//         LEFT JOIN 
//             blog_category ON products.blog_category = blog_category.id
//         WHERE 
//             REPLACE(LOWER(products.seo_title), ' ', '-') = '$uid'
//     ");

//     if ($result->num_rows() > 0) {
//         return $result->result(); // Return the fetched data
//     } else {
//         return 0;
//     }
// }



	public function products_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('products');
	}


	public function products_update_data($data,$image)
	{
		// echo ("hi");
		$newdata = [
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
			'image' => $image,
		];
		// print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('products', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function products_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `products` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function blog_fetch()
	{

		$blog_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $blog_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $blog_data->result_array();
		} else {
			return false;
		}
	}
	public function get_recent_blogs($category, $limit = 3) {
        $this->db->select('*');
        $this->db->from('products'); 
        $this->db->where('blog_category', $category);
        $this->db->order_by('blog_date', 'DESC');
        $this->db->limit($limit);

        $query = $this->db->get();

        return $query->result();
    }
}
