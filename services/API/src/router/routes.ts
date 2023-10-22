import express from "express";
const router = express.Router();

import { GetProductsController } from "../controllers/get-products-controller";
const getProductsController = new GetProductsController();

router.get("/products", getProductsController.getProductsController);

export {
    router
}