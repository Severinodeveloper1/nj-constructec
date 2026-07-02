<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nueva Reclamación Registrada</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 5px;">
    <h2 style="color: #b91c1c; border-bottom: 2px solid #b91c1c; padding-bottom: 10px;">Nueva Registro en Libro de Reclamaciones</h2>
    <p>Se ha registrado un nuevo reclamo/queja en la web:</p>
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold; width: 40%;">Número de Hoja:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold; color: #b91c1c;">{{ $complaint->claim_number }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Tipo de Registro:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $complaint->claim_type }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Nombre del Consumidor:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $complaint->full_name }} ({{ $complaint->client_type }})</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Documento:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $complaint->document_type }} - {{ $complaint->document_number }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Contacto:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">Email: {{ $complaint->email }}<br>Teléfono: {{ $complaint->phone }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Dirección:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $complaint->address }} ({{ $complaint->district }}, {{ $complaint->province }}, {{ $complaint->department }})</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Tipo de Bien:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $complaint->good_type }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold;">Descripción del Bien:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $complaint->good_description }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold; vertical-align: top;">Descripción del Suceso:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; white-space: pre-line;">{{ $complaint->incident_description }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; font-weight: bold; vertical-align: top;">Pedido / Solicitud:</td>
            <td style="padding: 8px; border-bottom: 1px solid #ddd; white-space: pre-line;">{{ $complaint->request }}</td>
        </tr>
    </table>
    <p style="margin-top: 30px; font-size: 11px; color: #666; text-align: center; border-top: 1px solid #eee; padding-top: 20px;">
        Este correo fue generado automáticamente por el sistema de Libro de Reclamaciones de NJ CONSTRUCTEC. Gestione el caso en el panel administrativo.
    </p>
</body>
</html>
