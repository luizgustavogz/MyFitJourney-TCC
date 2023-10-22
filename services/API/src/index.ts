import express from "express";
import { router } from "./router/routes";
import cors from "cors";
import dotenv from "dotenv";
const app = express();
dotenv.config();

app.use(express.json());
app.use(express.urlencoded({ extended: true }));
app.use(cors({origin: "*"}))
app.use(router);

const PORT = process.env.DB_SERVER_PORT;

app.listen(PORT, () => {
    console.log(`Servidor rodando na porta ${PORT}`);
});