<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!----======== CSS ======== -->
       <link rel="stylesheet" href="style.css">

     <!----===== Iconscout CSS ===== -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

     <script src="script.js"></script>
     <title>Formulario T-Soluciona</title>

</head>
<body>
    <div class="container">

        <header>FORMULARIO DE REGISTRO DE </header>

        <form action="#">
            <div class="form first">
                <div class="Ficha_Personal">
                    <span class="title">Información Personal</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Correo Electronico</label>
                            <input type="text" placeholder="ejemplo@gmail.com" required>
                        </div>

                        <div class="input-field">
                            <label>Numero de Celular</label>
                            <input type="number" placeholder="000 000 000" required>
                        </div>

                        <div class="input-field">
                            <label>Nacionalidad</label>
                            <input type="text" placeholder="Peruana" required>
                        </div>


                        <div class="input-field">
                            <label>Dirección Actual</label>
                            <input type="text" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Departamento</label>
                            <input type="text" placeholder="" required>
                        </div>
                        <div class="input-field">
                            <label>Distrito</label>
                            <input type="text" placeholder="" required>
                        </div>

                        <div class="input-field">
                            <label>Provincia</label>
                            <input type="text" placeholder="" required>
                        </div>
                </div>

                <div class="Ficha_Salud">
                    <span class="title">Ficha de Salud</span>
                    <label> Declaro bajo juramento que estoy conforme con mi postulación y que la empresa T-Soluciona SAC me ha explicado lo siguiente:</label>
                    <label>1.    Sueldo mínimo vital :S/.1025.00  </label>
                    <label>2.   Asignación Familiar : 102.50 ( si tengo derechohabientes)</label>
                    <label>3.   Beneficios sociales: Vacaciones, Cts y Gratificaciones</label>
                    <div class="fields">
                        <div class="input-field">
                            <label>¿Toma alguna medicina diariamente o periódicamente?</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Padece o ha padecido alguna enfermedad, dolencia o problema de salud.</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Padece de problemas respiratorios? (Asma, bronquitis, alergias, etc.)</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Presenta problemas en la piel?</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Tiene o ha tenido alguna enfermedad del corazón? Infarto, arritmia, insuficiencia cardiaca, uso de marcapaso, etc.</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Tiene alguna enfermedad crónica? (Diabetes, Hipertensión Arterial, Insuficiencia Renal)</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Tiene alguna enfermedad neurológica o psiquiátrica? (Convulsiones, Epilepsia, Desmayos, Ansiedad, Depresión, Esquizofrenia, etc</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Ud. ha sido operado recientemente?</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Ud. ¿Ha tenido algún accidente que le haya producido secuelas como limitación física o mental? </label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>


            <div class="form second">
                <div class="Ficha_Trabajo">
                    <span class="title">Ficha de Trabajo</span>

                    <div class="fields">
                    <div class="input-field">
                            <label>Peso (Kg)</label>
                            <input type="number" placeholder="Ejm: 45" required>
                        </div>

                        <div class="input-field">
                            <label>Estatura (M)</label>
                            <input type="Estatura" placeholder="Ejm: 1.65" required>
                        </div>

                        <div class="input-field">
                            <label>Talla de Zapatos</label>
                            <input type="text" placeholder="Ejm: 40" required>
                        </div>

                        <div class="input-field">
                            <label>Talla de Uniforme</label>
                            <select required>
                                <option disabled selected>Seleccionar</option>
                                <option>S</option>
                                <option>M</option>
                                <option>XL</option>
                                <option>XXL</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>¿Cuándo fue la última vez que visitaste al doctor, por qué?</label>
                            <input type="text" placeholder="Permanent or Temporary" required>
                        </div>

                        <div class="input-field">
                            <label>¿Tienes disponibilidad de cubrir horarios rotativos (mañana, tarde,noche, madrugada)?</label>
                            <input type="text" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>¿Tienes alguna dificultad para trabajar 8 horas de pie?</label>
                            <input type="text" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>¿Estás estudiando o llevando algún curso actualmente?</label>
                            <input type="text" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>¿Tiene hijos menores de edad?</label>
                            <input type="number" placeholder="Enter block number" required>
                        </div>

                        <div class="input-field">
                            <label>¿Te genera algún problema o tiene alguna dificultad el olor a gasolina?</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>

                        <div class="input-field">
                            <label>¿Anteriormente ha laborado para Primax - Coesti?</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>

                        <div class="input-field">
                            <label>¿Con cuantas dosis cuentas?</label>
                            <input type="number" placeholder="Enter ward number" required>
                        </div>
                    </div>
                </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>

                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
