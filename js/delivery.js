// server.js
const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/delivery', { useNewUrlParser: true, useUnifiedTopology: true });

// Define a delivery schema
const deliverySchema = new mongoose.Schema({
  deliveryManId: String,
  latitude: Number,
  longitude: Number,
});

const Delivery = mongoose.model('Delivery', deliverySchema);

app.use(bodyParser.json());

// Update delivery location
app.post('/update-location', async (req, res) => {
  const { deliveryManId, latitude, longitude } = req.body;

  try {
    // Update or create a new document with the latest location
    await Delivery.findOneAndUpdate({ deliveryManId }, { latitude, longitude }, { upsert: true });
    res.status(200).json({ message: 'Location updated successfully' });
  } catch (error) {
    res.status(500).json({ message: 'Internal server error' });
  }
});

// Get delivery location
app.get('/get-location/:deliveryManId', async (req, res) => {
  const deliveryManId = req.params.deliveryManId;

  try {
    const location = await Delivery.findOne({ deliveryManId });
    res.status(200).json(location);
  } catch (error) {
    res.status(500).json({ message: 'Internal server error' });
  }
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
