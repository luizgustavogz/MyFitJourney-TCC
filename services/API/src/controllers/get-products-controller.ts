import { Request, Response } from "express";
import { GetProductsService } from "../services/get-products";
const getProductsService = new GetProductsService();

export class GetProductsController {
    async getProductsController(req: Request, res: Response) {

        const getProducts = await getProductsService.getProducts();

        return res.status(getProducts.status).json({
            message: getProducts.message,
            products: getProducts.getProducts
        });
    }
}