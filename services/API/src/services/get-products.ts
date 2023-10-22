import { knex } from "../database/connection";

export class GetProductsService {
    async getProducts() {
        try {
            const getProducts = await knex.select("*").from("accessories");
            return {
                message: "Produtos retornados",
                status: 200, 
                getProducts
            }
        } catch (error) {
            console.log(error);
            return {
                message: "Houve um erro ao buscar os dados",
                status: 400
            }
        }
    }
}