Database Engineering - Sistem Kegiatan Mahasiswa

Deskripsi
Project ini merupakan implementasi database Sistem Kegiatan Mahasiswa menggunakan Laravel.

Entitas Database
•	Users
•	Organisasis
•	Kegiatans
•	Proposals
•	Reviewers
•	Proposal Reviews

Relasi Antar Tabel
Organisasi (1) -> (N) Kegiatan
Kegiatan (1) -> (N) Proposal
Proposal (1) -> (N) Proposal Review
Reviewer (1) -> (N) Proposal Review

Foreign Key
•	organisasi_id -> organisasis.id
•	kegiatan_id -> kegiatans.id
•	user_id -> users.id
•	proposal_id -> proposals.id
•	reviewer_id -> reviewers.id

Unique Constraint
•	nama organisasi
•	kombinasi kegiatan_id dan user_id

Index
•	status proposal
•	organisasi_id
•	proposal_id + reviewer_id

Transaction
Submit proposal dan pembuatan workflow reviewer menggunakan Laravel Database Transaction.

Author
Immanuel Aprilio
