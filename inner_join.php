// Definition
The INNER JOIN keyword selects records that have matching values in both tables.

select column_name(s)
from table1
INNER JOIN table2
ON table1.column_name = table2.column_name;



Example:

select patients.name_kh, invoices.invoice_number, patients.id
from patients
INNER JOIN invoices
ON patients.id=invoices.id where patients.id = 16;
