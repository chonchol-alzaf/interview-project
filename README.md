# Database Design & Query Challenges

We will be working with the following database schema:

### **Database Schema**
1. **Customers Table** (`customers`)
    - `id` (Primary Key)
    - `name` (String)
    - `email` (Unique, String)
    - `phone` (String, Nullable)
    - `created_at`, `updated_at`

2. **Orders Table** (`orders`)
    - `id` (Primary Key)
    - `customer_id` (Foreign Key → customers.id, Cascade on Delete)
    - `total_amount` (Decimal)
    - `status` (Enum: pending, completed, canceled, Default: pending)
    - `created_at`, `updated_at`

3. **Order Items Table** (`order_items`)
    - `id` (Primary Key)
    - `order_id` (Foreign Key → orders.id, Cascade on Delete)
    - `product_name` (String)
    - `quantity` (Integer)
    - `price` (Decimal)
    - `created_at`, `updated_at`

---

## **Interview Tasks**
### **1. Write a SQL Query**
> **Question:** Write an SQL query to get the top 5 customers who have spent the most in total.

**Expected Output:**
| customer_id | name  | total_spent |
|------------|------|------------|
| 1          | John  | 2000.00     |
| 3          | Sarah | 1500.00     |
| 5          | Alex  | 1200.00     |


### 2: Write an Eloquent query in Laravel that retrieves the same result as the SQL query above.


### 3: Write an SQL query to find all customers who have never placed an order.

### 4: Write an SQL query to get all customers who have placed more than 3 orders.

---

## **Bonus Challenges**
- Optimize the database for performance (indexes, caching, etc.).
- Modify queries to include pagination in Laravel.
- Implement soft deletes in the schema and update queries accordingly.
- Design an API endpoint to retrieve a customer's order history in JSON format.

---
```

Good luck with the interview! 🚀

