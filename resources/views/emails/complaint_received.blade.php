<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Reclamación Registrada — NJ CONSTRUCTEC</title>
</head>
<body style="margin:0;padding:0;background-color:#f3f4f6;font-family:'Segoe UI',Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f3f4f6;padding:32px 16px;">
  <tr>
    <td align="center">
      <table width="600" cellpadding="0" cellspacing="0" style="max-width:600px;width:100%;background-color:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,0.08);">

        {{-- Header --}}
        <tr>
          <td style="background:linear-gradient(135deg,#991b1b 0%,#7f1d1d 100%);padding:28px 40px;text-align:center;">
            <p style="margin:0 0 4px 0;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:1px;">NJ CONSTRUCTEC</p>
            <p style="margin:0;font-size:12px;color:rgba(255,255,255,0.7);letter-spacing:2px;text-transform:uppercase;">Ingeniería & Construcción</p>
            <div style="margin:16px auto 0 auto;background-color:#fca5a5;display:inline-block;padding:6px 20px;border-radius:20px;">
              <p style="margin:0;font-size:11px;font-weight:700;color:#7f1d1d;text-transform:uppercase;letter-spacing:1px;">⚠️ Nueva Reclamación Registrada</p>
            </div>
          </td>
        </tr>

        {{-- Claim number highlight --}}
        <tr>
          <td style="padding:28px 40px 0 40px;text-align:center;">
            <div style="background-color:#fff1f2;border:2px solid #fecaca;border-radius:8px;padding:16px 24px;display:inline-block;width:100%;box-sizing:border-box;">
              <p style="margin:0 0 4px 0;font-size:12px;color:#9ca3af;text-transform:uppercase;letter-spacing:1px;font-weight:600;">Número de Hoja de Reclamación</p>
              <p style="margin:0;font-size:26px;font-weight:700;color:#991b1b;letter-spacing:2px;">{{ $complaint->claim_number }}</p>
              <p style="margin:4px 0 0 0;font-size:12px;color:#6b7280;">Registrado el {{ $complaint->created_at->timezone('America/Lima')->format('d/m/Y \a \l\a\s H:i') }}</p>
            </div>
          </td>
        </tr>

        {{-- Body --}}
        <tr>
          <td style="padding:24px 40px 8px 40px;">
            <p style="margin:0 0 20px 0;font-size:15px;color:#374151;line-height:1.7;">
              Se ha registrado un nuevo ingreso en el Libro de Reclamaciones Digital. A continuación los datos completos del consumidor y la reclamación:
            </p>

            {{-- Sección: Datos del Consumidor --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
              <tr>
                <td style="background-color:#135f99;padding:10px 16px;border-radius:6px 6px 0 0;">
                  <p style="margin:0;font-size:12px;font-weight:700;color:#ffffff;text-transform:uppercase;letter-spacing:0.5px;">👤 Datos del Consumidor</p>
                </td>
              </tr>
              <tr>
                <td style="background-color:#f9fafb;border:1px solid #e5e7eb;border-top:none;border-radius:0 0 6px 6px;padding:0;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;width:40%;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Nombre Completo</span><br>
                        <span style="font-size:14px;color:#111827;font-weight:600;">{{ $complaint->full_name }}</span>
                        <span style="font-size:11px;color:#6b7280;"> ({{ $complaint->client_type }})</span>
                      </td>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Documento</span><br>
                        <span style="font-size:14px;color:#111827;">{{ $complaint->document_type }}: {{ $complaint->document_number }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Correo Electrónico</span><br>
                        <span style="font-size:14px;color:#135f99;">{{ $complaint->email }}</span>
                      </td>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Teléfono</span><br>
                        <span style="font-size:14px;color:#111827;">{{ $complaint->phone }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Dirección</span><br>
                        <span style="font-size:14px;color:#111827;">{{ $complaint->address }}{{ $complaint->district ? ' — ' . $complaint->district : '' }}{{ $complaint->province ? ', ' . $complaint->province : '' }}{{ $complaint->department ? ', ' . $complaint->department : '' }}</span>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            {{-- Sección: Detalle de la Reclamación --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
              <tr>
                <td style="background-color:#991b1b;padding:10px 16px;border-radius:6px 6px 0 0;">
                  <p style="margin:0;font-size:12px;font-weight:700;color:#ffffff;text-transform:uppercase;letter-spacing:0.5px;">📋 Detalle de la Reclamación</p>
                </td>
              </tr>
              <tr>
                <td style="background-color:#f9fafb;border:1px solid #e5e7eb;border-top:none;border-radius:0 0 6px 6px;padding:0;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Tipo</span><br>
                        <span style="font-size:14px;font-weight:700;color:#991b1b;">{{ $complaint->claim_type }}</span>
                      </td>
                      <td style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Bien Contratado</span><br>
                        <span style="font-size:14px;color:#111827;">{{ $complaint->good_type }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Descripción del Bien</span><br>
                        <span style="font-size:14px;color:#374151;">{{ $complaint->good_description }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;border-bottom:1px solid #e5e7eb;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Descripción del Suceso</span><br>
                        <span style="font-size:14px;color:#374151;white-space:pre-line;">{{ $complaint->incident_description }}</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" style="padding:10px 16px;">
                        <span style="font-size:11px;color:#6b7280;font-weight:600;text-transform:uppercase;">Pedido / Solicitud del Consumidor</span><br>
                        <span style="font-size:14px;color:#374151;white-space:pre-line;">{{ $complaint->request }}</span>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            {{-- Acción requerida --}}
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:28px;">
              <tr>
                <td style="background-color:#fffbeb;border:1px solid #fde68a;border-radius:8px;padding:16px;">
                  <p style="margin:0;font-size:13px;color:#92400e;line-height:1.6;">
                    ⏱️ <strong>Plazo legal:</strong> Conforme a la normativa de INDECOPI, debe dar respuesta en un plazo máximo de <strong>15 días hábiles</strong> desde la fecha de presentación.
                  </p>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        {{-- Footer --}}
        <tr>
          <td style="background-color:#f3f4f6;padding:20px 40px;text-align:center;border-top:1px solid #e5e7eb;">
            <p style="margin:0;font-size:11px;color:#9ca3af;line-height:1.8;">
              Este correo fue generado automáticamente por el sistema de Libro de Reclamaciones de NJ CONSTRUCTEC.<br>
              Gestione el caso desde el panel administrativo con la mayor brevedad posible.
            </p>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>

</body>
</html>
