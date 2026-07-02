<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 5px;">
    <h2 style="color: #1e3a8a; border-bottom: 2px solid #1e3a8a; padding-bottom: 10px;">Nuevo Mensaje de Contacto / Cotización</h2>
    <p>Se ha recibido una nueva consulta técnica a través del sitio web:</p>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold; width: 30%;">Nombre:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $contact->full_name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Correo:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $contact->email }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Teléfono:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $contact->phone ?? '-' }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Asunto:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $contact->subject }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold; vertical-align: top;">Mensaje:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; white-space: pre-line;">{{ $contact->message }}</td>
        </tr>
    </table>
    <p style="margin-top: 30px; font-size: 11px; color: #666; text-align: center; border-top: 1px solid #eee; padding-top: 20px;">
        Este correo fue generado automáticamente por el sitio web de NJ CONSTRUCTEC.
    </p>
</body>
</html>
