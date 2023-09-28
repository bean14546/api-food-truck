const mongoose = require("mongoose");
const users = new mongoose.Schema({
  username: { type: String },
  password: { type: String },
  first_name: { type: String },
  last_name: { type: String },
  age: { type: Number },
  gender: { type: String },
});
module.exports = mongoose.model("users", users);
