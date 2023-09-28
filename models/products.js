const mongoose = require("mongoose");
const products = new mongoose.Schema({
  image: { type: String },
  product: { type: String },
  detail: { type: String },
  price: { type: Number },
  amount: { type: Number },
});
module.exports = mongoose.model("products", products);
