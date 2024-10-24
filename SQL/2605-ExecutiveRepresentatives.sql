SELECT prod.name, prov.name
FROM products prod
INNER JOIN providers prov
ON prod.id_providers = prov.id
INNER JOIN categories c
ON prod.id_categories = c.id
WHERE c.id = 6;
