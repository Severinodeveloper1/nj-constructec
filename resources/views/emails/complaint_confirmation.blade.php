<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Copia de tu Reclamación - {{ $complaint->claim_number }}</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 5px;">
    <div style="text-align: center; margin-bottom: 20px; border-bottom: 1px solid #eee; padding-bottom: 15px;">
        <h2 style="color: #1e3a8a; margin: 0;">NJ CONSTRUCTEC SAC</h2>
        <p style="font-size: 12px; color: #666; margin: 5px 0 0 0;">Copia de Hoja de Reclamación Digital</p>
    </div>
    
    <p>Estimado(a) <strong>{{ $complaint->full_name }}</strong>,</p>
    <p>De acuerdo con la normativa vigente de protección al consumidor de INDECOPI, le enviamos una copia del registro de su **{{ $complaint->claim_type }}** presentado a través de nuestro Libro de Reclamaciones digital.</p>
    
    <div style="background-color: #fffaf0; border: 1px solid #ffd8a8; padding: 15px; border-radius: 4px; margin: 20px 0;">
        <h3 style="margin-top: 0; color: #d9480f; font-size: 16px;">Hoja de Reclamación Nro: {{ $complaint->claim_number }}</h3>
        <p style="margin: 5px 0;"><strong>Fecha y Hora de Registro:</strong> {{ $complaint->created_at->format('d/m/Y H:i') }}</p>
        <p style="margin: 5px 0;"><strong>Tipo de Registro:</strong> {{ $complaint->claim_type }}</p>
        <p style="margin: 5px 0;"><strong>Bien Contratado:</strong> {{ $complaint->good_type }} - {{ $complaint->good_description }}</p>
        <hr style="border: 0; border-top: 1px solid #ffd8a8; margin: 10px 0;">
        <p style="margin: 5px 0;"><strong>Descripción de la disconformidad:</strong></p>
        <p style="margin: 5px 0; font-style: italic; color: #555; white-space: pre-line;">{{ $complaint->incident_description }}</p>
        <p style="margin: 5px 0; margin-top: 10px;"><strong>Detalle del pedido o solicitud del consumidor:</strong></p>
        <p style="margin: 5px 0; font-style: italic; color: #555; white-space: pre-line;">{{ $complaint->request }}</p>
    </div>
    
    <p>Conforme a la ley, la empresa dará respuesta a su disconformidad en un plazo no mayor a quince (15) días hábiles improrrogables desde la fecha de presentación de esta hoja de reclamación.</p>
    
    <p style="margin-top: 30px; font-size: 11px; color: #666; text-align: center; border-top: 1px solid #eee; padding-top: 20px;">
        Atentamente,<br>
        <strong>NJ CONSTRUCTEC SAC</strong><br>
        RUC: 20600000000 | Dirección: {{ $setting->address }}<br>
        <a href="mailto:{{ $setting->email }}" style="color: #1e3a8a;">{{ $setting->email }}</a>
    </p>
</body>
</html>
