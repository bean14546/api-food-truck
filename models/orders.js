const mongoose = require("mongoose");
const orders = new mongoose.Schema({
  user_id: { type: String },
  username: { type: String },
  items: { type: Array },
});
module.exports = mongoose.model("orders", orders);
