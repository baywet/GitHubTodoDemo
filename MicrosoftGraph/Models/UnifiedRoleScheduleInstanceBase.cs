using GithubTodoDemo.MicrosoftGraph.Models;
using Microsoft.Kiota.Abstractions.Serialization;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
namespace GithubTodoDemo.MicrosoftGraph.Models {
    /// <summary>Provides operations to manage the lists property of the microsoft.graph.todo entity.</summary>
    public class UnifiedRoleScheduleInstanceBase : Entity, IParsable {
        /// <summary>Read-only property with details of the app-specific scope when the assignment or role eligibility is scoped to an app. Nullable.</summary>
        public GithubTodoDemo.MicrosoftGraph.Models.AppScope AppScope { get; set; }
        /// <summary>Identifier of the app-specific scope when the assignment or role eligibility is scoped to an app. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. App scopes are scopes that are defined and understood by this application only. Use / for tenant-wide app scopes. Use directoryScopeId to limit the scope to particular directory objects, for example, administrative units.</summary>
        public string AppScopeId { get; set; }
        /// <summary>The directory object that is the scope of the assignment or role eligibility. Read-only.</summary>
        public DirectoryObject DirectoryScope { get; set; }
        /// <summary>Identifier of the directory object representing the scope of the assignment or role eligibility. The scope of an assignment or role eligibility determines the set of resources for which the principal has been granted access. Directory scopes are shared scopes stored in the directory that are understood by multiple applications. Use / for tenant-wide scope. Use appScopeId to limit the scope to an application only.</summary>
        public string DirectoryScopeId { get; set; }
        /// <summary>The principal that&apos;s getting a role assignment or role eligibility through the request.</summary>
        public DirectoryObject Principal { get; set; }
        /// <summary>Identifier of the principal that has been granted the role assignment or that&apos;s eligible for a role.</summary>
        public string PrincipalId { get; set; }
        /// <summary>Detailed information for the roleDefinition object that is referenced through the roleDefinitionId property.</summary>
        public UnifiedRoleDefinition RoleDefinition { get; set; }
        /// <summary>Identifier of the unifiedRoleDefinition object that is being assigned to the principal or that the principal is eligible for.</summary>
        public string RoleDefinitionId { get; set; }
        /// <summary>
        /// Instantiates a new unifiedRoleScheduleInstanceBase and sets the default values.
        /// </summary>
        public UnifiedRoleScheduleInstanceBase() : base() {
            OdataType = "#microsoft.graph.unifiedRoleScheduleInstanceBase";
        }
        /// <summary>
        /// Creates a new instance of the appropriate class based on discriminator value
        /// <param name="parseNode">The parse node to use to read the discriminator value and create the object</param>
        /// </summary>
        public static new UnifiedRoleScheduleInstanceBase CreateFromDiscriminatorValue(IParseNode parseNode) {
            _ = parseNode ?? throw new ArgumentNullException(nameof(parseNode));
            var mappingValue = parseNode.GetChildNode("@odata.type")?.GetStringValue();
            return mappingValue switch {
                "#microsoft.graph.unifiedRoleAssignmentScheduleInstance" => new UnifiedRoleAssignmentScheduleInstance(),
                "#microsoft.graph.unifiedRoleEligibilityScheduleInstance" => new UnifiedRoleEligibilityScheduleInstance(),
                _ => new UnifiedRoleScheduleInstanceBase(),
            };
        }
        /// <summary>
        /// The deserialization information for the current model
        /// </summary>
        public new IDictionary<string, Action<IParseNode>> GetFieldDeserializers() {
            return new Dictionary<string, Action<IParseNode>>(base.GetFieldDeserializers()) {
                {"appScope", n => { AppScope = n.GetObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AppScope>(GithubTodoDemo.MicrosoftGraph.Models.AppScope.CreateFromDiscriminatorValue); } },
                {"appScopeId", n => { AppScopeId = n.GetStringValue(); } },
                {"directoryScope", n => { DirectoryScope = n.GetObjectValue<DirectoryObject>(DirectoryObject.CreateFromDiscriminatorValue); } },
                {"directoryScopeId", n => { DirectoryScopeId = n.GetStringValue(); } },
                {"principal", n => { Principal = n.GetObjectValue<DirectoryObject>(DirectoryObject.CreateFromDiscriminatorValue); } },
                {"principalId", n => { PrincipalId = n.GetStringValue(); } },
                {"roleDefinition", n => { RoleDefinition = n.GetObjectValue<UnifiedRoleDefinition>(UnifiedRoleDefinition.CreateFromDiscriminatorValue); } },
                {"roleDefinitionId", n => { RoleDefinitionId = n.GetStringValue(); } },
            };
        }
        /// <summary>
        /// Serializes information the current object
        /// <param name="writer">Serialization writer to use to serialize this model</param>
        /// </summary>
        public new void Serialize(ISerializationWriter writer) {
            _ = writer ?? throw new ArgumentNullException(nameof(writer));
            base.Serialize(writer);
            writer.WriteObjectValue<GithubTodoDemo.MicrosoftGraph.Models.AppScope>("appScope", AppScope);
            writer.WriteStringValue("appScopeId", AppScopeId);
            writer.WriteObjectValue<DirectoryObject>("directoryScope", DirectoryScope);
            writer.WriteStringValue("directoryScopeId", DirectoryScopeId);
            writer.WriteObjectValue<DirectoryObject>("principal", Principal);
            writer.WriteStringValue("principalId", PrincipalId);
            writer.WriteObjectValue<UnifiedRoleDefinition>("roleDefinition", RoleDefinition);
            writer.WriteStringValue("roleDefinitionId", RoleDefinitionId);
        }
    }
}