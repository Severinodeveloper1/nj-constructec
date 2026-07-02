<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hemos recibido tu consulta</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 5px;">
    <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="color: #1e3a8a; margin: 0;">NJ CONSTRUCTEC</h2>
        <p style="font-size: 12px; color: #666; margin: 5px 0 0 0;">Ingeniería y Construcción de Confianza</p>
    </div>
    
    <h3 style="color: #1e3a8a; border-bottom: 1px solid #eee; padding-bottom: 10px;">¡Hola, {{ $contact->full_name }}!</h3>
    <p>Hemos recibido correctamente tu consulta y/o solicitud de cotización técnica. Nuestro equipo especializado la está revisando y se pondrá en contacto contigo a la brevedad.</p>
    
    <div style="background-color: #f9f9ff; padding: 15px; border-radius: 4px; margin: 20px 0;">
        <h4 style="margin-top: 0; color: #1e3a8a;">Resumen de tu mensaje:</h4>
        <p style="margin: 5px 0;"><strong>Asunto:</strong> {{ $contact->subject }}</p>
        <p style="margin: 5px 0;"><strong>Mensaje enviado:</strong></p>
        <p style="margin: 5px 0; font-style: italic; color: #555; white-space: pre-line;">{{ $contact->message }}</p>
    </div>
    
    <p>Si deseas atención inmediata, recuerda que puedes escribirnos directamente a nuestro WhatsApp oficial: <strong>{{ $setting->whatsapp_phone }}</strong>.</p>
    
    <p style="margin-top: 30px; font-size: 11px; color: #666; text-align: center; border-top: 1px solid #eee; padding-top: 20px;">
        Atentamente,<br>
        <strong>El equipo de NJ CONSTRUCTEC SAC</strong><br>
        <a href="mailto:{{ $setting->email }}" style="color: #1e3a8a;">{{ $setting->email }}</a> | {{ $setting->phone }}
    </p>
</body>
</html>
