var express = require('express')
var router = express.Router()
var productsModel = require('../models/products')
var verifyToken = require('../middleware/jwt_decode')

router.get('/', async (req, res) => {
  try {
    const products = await productsModel.find()

    return res.send({ data: products, message: 'Get Products Success' })
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

router.get('/:id', async (req, res) => {
  try {
    const id  = req.params.id

    if (id) {
      const products = await productsModel.findById(id)
      
      return res.send({ data: products, message: 'Get Product Success' })
    } else {
      return res.status(400).send({ message: "Invalid ID" })
    }
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

router.post('/create', verifyToken, async (req, res) => {
  try {
    const body = req.body
    const new_product = new productsModel({
      image: body.image,
      product: body.product,
      detail: body.detail,
      price: body.price,
      amount: body.amount,
    })
    const products = await new_product.save()
    
    return res.status(201).send({ data: products, message: 'Create Product Success' })
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

router.put('/update/:id', verifyToken, async (req, res) => {
  try {
    const id  = req.params.id
    const body = req.body
    const product = {
      image: body.image,
      product: body.product,
      detail: body.detail,
      price: body.price,
      amount: body.amount,
    }

    if (id) {
      await productsModel.updateOne({ _id: id }, { $set: product })
      const products = await productsModel.findById(id)
      
      return res.send({ data: products, message: 'Update Success' })
    } else {
      return res.status(400).send({ message: "Invalid ID" })
    }
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

router.delete('/delete/:id', verifyToken, async (req, res) => {
  try {
    const id  = req.params.id

    if (id) {
      await productsModel.deleteOne({ _id: id })
      
      return res.send({ message: 'Delete Success' })
    } else {
      return res.status(400).send({ message: "Invalid ID" })
    }
  } catch (error) {
    return res.status(error.status||500).send({ message: error.message })
  }
})

module.exports = router