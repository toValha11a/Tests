-- Пункт A мне показалось логичным сделать запрос за последний месяц тк в задании не было конкретно указано
SELECT AVG(price)
FROM PURCHASES
         INNER JOIN USERS ON PURCHASES.userId = USERS.userId
         INNER JOIN ITEMS ON PURCHASES.itemId = ITEMS.itemId
WHERE MONTH(`date`) = MONTH(DATE_ADD(NOW(), INTERVAL -1 MONTH)) AND USERS.age BETWEEN 18 AND 25

-- Пункт B
SELECT MONTH(date) AS month, SUM(ITEMS.price) AS total_revenue
FROM PURCHASES
    JOIN ITEMS ON PURCHASES.itemId = ITEMS.itemId
WHERE YEAR(PURCHASES.date) = YEAR(CURRENT_DATE)
  AND PURCHASES.userId IN (
    SELECT USERS.userId
    FROM USERS
    WHERE USERS.age >= 35
    )
GROUP BY MONTH(date)
ORDER BY total_revenue DESC
    LIMIT 1;