```txt
URI
===

- /api/admin/	-> get all admin
- /api/admin/username/(:username) 	-> get, update, delete admin by username
- /api/admin/login/username/(:username)/password/(:password) 	-> login admin

- /api/customer/	-> get all customer
- /api/customer/username/(:username) 	-> get, update, delete customer by username
- /api/customer/login/username/(:username)/password/(:password) 	-> login customer

- /api/cd/				-> get all cd
- /api/cd/id/(:id) 		-> get, update, delete cd by id
- /api/cd/genre/(:id) 	-> get cd by genre
- /api/cd/negara/(:id) 	-> get cd by negara
- /api/cd/tahun/(:id) 	-> get cd by tahun
- /api/cd/pemain/(:id) 	-> get cd by pemain
- /api/cd/stok/(:id) 	-> get, update stok of a cd

- /api/transaction/ 	-> get all transaction
- /api/transaction/id/(:id) 	-> get transaction by id
- /api/transaction/cd/(:id) 	-> get cd of a transaction
- /api/transaction/customer/(:username) 	-> get all transaction by Customer
- /api/transaction/confirmation/(:id) 		-> confirmation of a transaction
- /api/transaction/peminjaman/
- /api/transaction/peminjaman/(:id)
- /api/transaction/pengembalian/
- /api/transaction/pengembalian/(:id)
```