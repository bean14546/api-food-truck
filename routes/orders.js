var express = require('express');
var router = express.Router();
var ordersModel = require('../models/orders');
var productsModel = require('../models/products');

router.get('/', async (req, res) => {
  try {
    const orders = await ordersModel.find()

    return res.send({ data: orders, message: 'Get Orders Success' })
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

router.get('/:id', async (req, res) => {
  try {
    const id  = req.params.id

    if (id) {
      const orders = await ordersModel.findById(id)
      
      return res.send({ data: orders, message: 'Get Order Success' })
    } else {
      return res.status(400).send({ message: "Invalid ID" })
    }
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

router.post('/create', async (req, res) => {
  try {
    const body = req.body
    const new_order = new ordersModel({
      user_id: body.user_id,
      username: body.username,
      items: body.items,
      total_price: body.total_price,
    })
    const orders = await new_order.save()

    if (orders) {
      orders.items.forEach(async (item) => {
        console.log('item', item)
        const product = await productsModel.findById(item._id)
        try {
          const id  = product.id
          const productObj = {
            product: product.product,
            detail: product.detail,
            price: product.price,
            amount: product.amount - item.qty
          }
      
          if (id) {
            await productsModel.updateOne({ _id: id }, { $set: productObj })
            return res.send({ data: orders, message: 'Create Orders Success' })
          } else {
            return res.status(400).send({ message: "Invalid ID" })
          }
        } catch (error) {
          return res.status(error.status||500).send({ message: error.message })
        }
      })
    }
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

module.exports = router;